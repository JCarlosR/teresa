<?php

namespace App\Http\Controllers\External;

use App\InboxMessage;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $rules = [
            'user_id' => 'required|exists:users,id',
            'name' => 'required|min:3|max:30',
            'email' => 'required|email',
            'phone' => 'min:6|max:30',
            'topic' => [
                'required'
            ],
            'content' => 'required|min:15',
        ];

        $messages = [
            'user_id' => 'No se ha especificado el destinatario.',
            'user_id.exists' => 'Ha ocurrido un error inesperado.',

            'name.required' => 'Olvidó ingresar su nombre.',
            'name.min' => 'El nombre ingresado es demasiado corto.',
            'name.max' => 'El nombre ingresado es demasiado largo.',

            'email.required' => 'Olvidó ingresar su email.',
            'email.email' => 'El email ingresado no tiene un formato válido.',

            'phone.min' => 'Ingrese al menos 6 caracteres para el teléfono.',
            'phone.max' => 'El teléfono ingresado es demasiado extenso.',

            'topic.required' => 'Olvidó seleccionar el asunto.',
            'topic.in' => 'El asunto ingresado no es válido.',

            'content.required' => 'Olvidó ingresar su mensaje.',
            'content.min' => 'El mensaje ingresado es demasiado corto.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);


        $client = User::find($request->input('user_id'));

        $validator->after(function ($validator) use ($client) {
            if (!$client->google_account) {
                $validator->errors()->add('google_account', 'Aún no se ha configurado el Google Account!');
            }
            if (!$client->contact_email) {
                $validator->errors()->add('contact_email', 'Aún no se ha configurado un email de contacto!');
            }
        });

        if ($validator->fails()) {
            return response()->json($validator->messages(), 200);
        }

        if (!$request->has('url')) {
            $request->request->add([
                'url' => $request->fullUrl()
            ]);
        }

        $senderEmail = $request->input('email');

        Mail::send('emails.external.contact', $request->all(), function ($m) use ($client, $senderEmail) {
            $m->to($client->google_account, $client->name)
                ->cc($client->contact_email)
                ->replyTo($senderEmail)
                ->subject('Han usado el formulario de contacto!');
        });

        // TODO: Send a confirmation email to the visitor

        $inboxMessage = new InboxMessage();
        $inboxMessage->user_id = $request->input('user_id');
        $inboxMessage->name = $request->input('name');
        $inboxMessage->email = $senderEmail;
        $inboxMessage->phone = $request->input('phone');
        $inboxMessage->content = $request->input('content');
        $inboxMessage->topic = $request->input('topic');
        $inboxMessage->save();

        $data = [];
        $data['success'] = true;
        return $data;
    }

}
