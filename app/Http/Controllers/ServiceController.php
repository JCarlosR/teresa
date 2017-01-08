<?php

namespace App\Http\Controllers;

use App\Service;
use App\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->middleware('auth');

        // Services associated with
        if (auth()->user()->is_admin)
            $this->user = User::find(session('client_id'));
        else
            $this->user = auth()->user();
    }

    public function index()
    {
        $services = $this->user->services;
        return view('client.services.index')->with(compact('services'));
    }

    public function create()
    {
        return view('client.services.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required'
        ];
        $messages = [
            'name.required' => 'Debe ingresar un nombre para el servicio'
        ];
        $this->validate($request, $rules, $messages);

        $service = new Service();
        $service->user_id = $this->user->id;
        $service->name = $request->get('name');
        $service->question_1 = $request->get('question_1');
        $service->question_2 = $request->get('question_2');
        $service->question_3 = $request->get('question_3');
        $service->question_4 = $request->get('question_4');
        $service->question_5 = $request->get('question_5');
        $service->save();

        return redirect('/servicios')->with('notification', 'El servicio se ha registrado correctamente.');
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('client.services.edit')->with(compact('service'));
    }

    public function update(Request $request)
    {
        $rules = [
            'name' => 'required',
            'service_id' => 'exists:services,id'
        ];
        $messages = [
            'name.required' => 'Debe ingresar un nombre para el servicio',
            'service_id.exists' => 'El servicio no existe en nuestra base de datos.'
        ];
        $this->validate($request, $rules, $messages);

        $service = Service::find($request->get('service_id'));
        $service->name = $request->get('name');
        $service->question_1 = $request->get('question_1');
        $service->question_2 = $request->get('question_2');
        $service->question_3 = $request->get('question_3');
        $service->question_4 = $request->get('question_4');
        $service->question_5 = $request->get('question_5');
        $service->save();

        return redirect('/servicios')->with('notification', 'El servicio se ha actualizado correctamente.');
    }

    public function delete($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        $notification = 'El servicio seleccionado se ha eliminado correctamente.';
        return back()->with(compact('notification'));
    }
}
