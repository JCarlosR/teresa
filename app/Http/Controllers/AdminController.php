<?php

namespace App\Http\Controllers;

use App\ServerAccess;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    use ClientDashboard;

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $clients = User::where('role', 0)->get();
        return view('admin.home')->with(compact('clients'));
    }

    public function clientDashboard($client_id)
    {
        $client = User::find($client_id);
        if (! $client)
            return redirect('/admin');

        // Set session variable to show the client name in the left menu
        session()->put('client_name', $client->name);

        return $this->getDashboardResponse(true, $client_id);
    }

    public function getClientData($client_id)
    {
        $client = User::find($client_id);
        return view('admin.data.main')->with(compact('client', 'client_id'));
    }

    public function postClientData(Request $request)
    {
        $rules = [
            'client_id' => 'required|exists:users,id',
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

        $user = User::find($request->get('client_id'));
        $user->trade_name = $request->get('trade_name');
        $user->fiscal_name = $request->get('fiscal_name');
        $user->ruc = $request->get('ruc');
        $user->phones = $request->get('phones');
        $user->schedule_start = $request->get('schedule_start');
        $user->schedule_end = $request->get('schedule_end');
        $user->works_from = $request->get('works_from');

        $user->domain = $request->get('domain');
        $user->google_analytics = $request->get('google_analytics');
        $user->webmaster_tools_google = $request->get('webmaster_tools_google');
        $user->webmaster_tools_bing = $request->get('webmaster_tools_bing');

        $user->save();

        return back()->with('notification', 'Los datos se han actualizado correctamente !');
    }

    public function getClientAccess($client_id)
    {
        $accesses = ServerAccess::where('user_id', $client_id)->get();
        return view('admin.data.access')->with(compact('client_id', 'accesses'));
    }

    public function postClientAccess(Request $request)
    {
        $rules = [
            'client_id' => 'required|exists:users,id',
            'name' => 'required|min:3',
            'url' => 'min:3',
            'credentials' => 'min:20'
        ];
        $messages = [
            'name.required' => 'Olvidó ingresar el nombre del acceso.',
            'name.min' => 'El nombre debe constar al menos de 3 caracteres.',
            'url.min' => 'La url debe constar al menos de 3 caracteres.',
            'credentials.min' => '¿Olvidó ingresar las credenciales?'
        ];
        $this->validate($request, $rules, $messages);

        $serverAccess = new ServerAccess();
        $serverAccess->user_id = $request->get('client_id');
        $serverAccess->name = $request->get('name');
        $serverAccess->url = $request->get('url');
        $serverAccess->credentials = $request->get('credentials');
        $serverAccess->save();

        return back()->with('notification', 'Los datos de acceso se han registrado correctamente!');
    }

    public function updateClientAccess(Request $request)
    {
        // TODO: Validate in modal using AJAX

        $serverAccess = ServerAccess::find($request->get('access_id'));
        $serverAccess->name = $request->get('name');
        $serverAccess->url = $request->get('url');
        $serverAccess->credentials = $request->get('credentials');
        $serverAccess->save();

        return back()->with('notification', 'Los datos de acceso se han actualizado correctamente!');
    }

    public function deleteClientAccess(Request $request)
    {
        // TODO: Check if the server access really belongs to the selected client

        $serverAccess = ServerAccess::find($request->get('access_id'));
        $serverAccess->delete();

        return back()->with('notification', 'Los datos de acceso se han eliminado correctamente!');
    }

}
