<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ServerAccess;
use Illuminate\Http\Request;

class AccessDataController extends Controller
{

    public function index()
    {
        $accesses = ServerAccess::where('user_id', session('client_id'))->get();
        return view('admin.data.access')->with(compact('accesses'));
    }

    public function store(Request $request)
    {
        $rules = [
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
        $serverAccess->user_id = session('client_id');
        $serverAccess->name = $request->get('name');
        $serverAccess->url = $request->get('url');
        $serverAccess->credentials = $request->get('credentials');
        $serverAccess->save();

        session()->flash('notification', 'Los datos de acceso se han registrado correctamente!');
        return back();
    }

    public function update(Request $request)
    {
        // TODO: Validate in modal using AJAX

        $serverAccess = ServerAccess::find($request->get('access_id'));
        $serverAccess->name = $request->get('name');
        $serverAccess->url = $request->get('url');
        $serverAccess->credentials = $request->get('credentials');
        $serverAccess->save();

        return back()->with('notification', 'Los datos de acceso se han actualizado correctamente!');
    }

    public function delete(Request $request)
    {
        // TODO: Check if the server access really belongs to the selected client

        $serverAccess = ServerAccess::find($request->get('access_id'));
        $serverAccess->delete();

        return back()->with('notification', 'Los datos de acceso se han eliminado correctamente!');
    }

}
