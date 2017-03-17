<?php

namespace App\Http\Controllers\External;

use App\InboxMessage;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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
                'required',
                'in:Proyectos,Proveedores,Empleo,Contacto directo,Otros',
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

        $this->validate($request, $rules, $messages);

        Mail::send('emails.external.contact', $request->all(), function ($m) {
            $m->to('juancagb.17@gmail.com', 'Juan Ramos')->subject('Han usado el formulario de contacto!');
        });

        $inboxMessage = new InboxMessage();
        $inboxMessage->user_id = $request->input('user_id');
        $inboxMessage->name = $request->input('name');
        $inboxMessage->email = $request->input('email');
        $inboxMessage->phone = $request->input('phone');
        $inboxMessage->content = $request->input('content');
        $inboxMessage->topic = $request->input('topic');
        $inboxMessage->save();

        return back();
    }

}
