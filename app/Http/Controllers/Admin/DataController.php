<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class DataController extends Controller
{
    // TODO: Middleare to check if a client was selected previously

    public function edit()
    {
        $client = User::find(session('client_id'));
        return view('admin.data.main')->with(compact('client', 'client_id'));
    }

    public function update(Request $request)
    {
        $rules = [
            'trade_name' => 'required|min:5',
            'fiscal_name' => 'min:5',
            'ruc' => 'digits:11',
            'schedule_start' => 'date_format:H:i',
            'schedule_end' => 'date_format:H:i',
            'works_from' => 'date'
        ];
        $messages = [
            'trade_name.required' => 'Por favor ingresa el nombre comercial de tu empresa.',
            'trade_name.min' => 'Ingresa al menos 5 caracteres para el nombre comercial.',
            'fiscal_name.min' => 'Ingresa al menos 5 caracteres para el nombre fiscal.',
            'ruc.digits' => 'El NIF debe constar de 11 dígitos.',
            'schedule_start.date_format' => 'Ingresa una hora válida de inicio (formato 24 horas).',
            'schedule_end.date_format' => 'Ingresa una hora válida de fin (formato 24 horas).',
            'works_from.date' => 'Ingresa una fecha válida como inicio de la empresa.'
        ];

        $this->validate($request, $rules, $messages);

        // Update the selected client data

        $user = User::find(session('client_id'));
        $user->trade_name = $request->get('trade_name');
        $user->fiscal_name = $request->get('fiscal_name');
        $user->ruc = $request->get('ruc');
        $user->address = $request->get('address');
        $user->phones = $request->get('phones');
        $user->schedule_start = $request->get('schedule_start');
        $user->schedule_end = $request->get('schedule_end');
        $user->works_from = $request->get('works_from');
        $user->service_started_at = $request->get('service_started_at');

        $user->domain = $request->get('domain');
        $user->title = $request->get('title');
        $user->description = $request->get('description');

        $user->google_analytics = $request->get('google_analytics');
        $user->google_analytics_view_id = $request->get('google_analytics_view_id');
        $user->webmaster_tools_google = $request->get('webmaster_tools_google');
        $user->webmaster_tools_bing = $request->get('webmaster_tools_bing');

        $user->save();

        return back()->with('notification', 'Los datos se han actualizado correctamente !');
    }
}
