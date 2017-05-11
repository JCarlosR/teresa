<?php

namespace App\Http\Controllers;

use App\Service;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $services = $this->client()->services;
        $description = $this->client()->services_description;
        return view('client.services.index')->with(compact('services', 'description'));
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);

        // Check if the service really belongs to the user
        if ($service->user_id !== $this->client()->id)
            return redirect('/servicios');

        $client = $this->client();
        return view('client.services.show')->with(compact('client', 'service'));
    }

    public function create()
    {
        $client = $this->client();
        return view('client.services.create')->with(compact('client'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'description' => 'max:155'
        ];
        $messages = [
            'name.required' => 'Debe ingresar un nombre para el servicio.',
            'description.max' => 'La descripción del servicio es muy extensa (resumen).'
        ];
        $this->validate($request, $rules, $messages);

        $service = new Service();
        $service->user_id = $this->client()->id;
        $service->name = $request->get('name');
        $service->description = $request->get('description');
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
        $client = $this->client();
        return view('client.services.edit')->with(compact('service', 'client'));
    }

    public function update(Request $request)
    {
        $rules = [
            'name' => 'required',
            'service_id' => 'exists:services,id',
            'description' => 'max:155'
        ];
        $messages = [
            'name.required' => 'Debe ingresar un nombre para el servicio.',
            'service_id.exists' => 'El servicio no existe en nuestra base de datos.',
            'description.max' => 'La descripción del servicio es muy extensa (resumen).'
        ];
        $this->validate($request, $rules, $messages);

        $service = Service::find($request->get('service_id'));
        $service->name = $request->get('name');
        $service->description = $request->get('description');
        $service->question_1 = $request->get('question_1');
        $service->question_2 = $request->get('question_2');
        $service->question_3 = $request->get('question_3');
        $service->question_4 = $request->get('question_4');
        $service->question_5 = $request->get('question_5');
        $service->save();

        return redirect('/servicio/'.$service->id.'/ver');
    }

    public function delete($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        $notification = 'El servicio seleccionado se ha eliminado correctamente.';
        return back()->with(compact('notification'));
    }
}
