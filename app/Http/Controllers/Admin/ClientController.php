<?php

namespace App\Http\Controllers\Admin;

use App\ClientType;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ClientController extends Controller
{
    public function create()
    {
        $client_types = ClientType::all();
        return view('admin.clients.create')->with(compact('client_types'));
    }

    public function store(Request $request)
    {
        $rules = [
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:8',
            'client_type_id' => 'required',

            'trade_name' => 'required|min:5',
            'fiscal_name' => 'min:5',
            'ruc' => 'digits:11',
            'schedule_start' => 'date_format:H:i',
            'schedule_end' => 'date_format:H:i',
            'works_from' => 'date'
        ];
        $messages = [
            'email.required' => 'Es necesario ingresar un email para la cuenta de usuario.',
            'email.unique' => 'Este email ya se encuentra en uso.',
            'password' => 'Es necesario ingresar una contraseña para la cuenta de usuario.',
            'password.min' => 'La contraseña debe presentar al menos 8 caracteres.',
            'client_type_id.required' => 'Seleccione el tipo de cliente.',

            'trade_name.required' => 'Por favor ingresa el nombre comercial de la empresa.',
            'trade_name.min' => 'Ingresa al menos 5 caracteres para el nombre comercial.',
            'fiscal_name.min' => 'Ingresa al menos 5 caracteres para el nombre fiscal.',
            'ruc.digits' => 'El NIF debe constar de 11 dígitos.',
            'schedule_start.date_format' => 'Ingresa una hora válida de inicio (formato 24 horas).',
            'schedule_end.date_format' => 'Ingresa una hora válida de fin (formato 24 horas).',
            'works_from.date' => 'Ingresa una fecha válida como inicio de la empresa.'
        ];
        $this->validate($request, $rules, $messages);

        $user = new User();

        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->client_type_id = $request->get('client_type_id') ?: null;

        $user->name = $request->get('trade_name');
        $user->trade_name = $request->get('trade_name');
        $user->fiscal_name = $request->get('fiscal_name');
        $user->ruc = $request->get('ruc');
        $user->phones = $request->get('phones');
        $user->schedule_start = $request->get('schedule_start');
        $user->schedule_end = $request->get('schedule_end');
        $user->works_from = $request->get('works_from');
        $user->domain = $request->get('domain');

        $user->save();

        $notification = 'El nuevo cliente se ha registrado satisfactoriamente!';
        return redirect('/admin')->with(compact('notification'));
    }
}
