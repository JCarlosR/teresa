<?php

namespace App\Http\Controllers;

use App\Project;
use App\Service;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = auth()->user()->projects;
        return view('panel.projects.index')->with(compact('projects'));
    }

    public function create()
    {
        $service_id = 0;
        return view('panel.projects.create')->with(compact('service_id'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:4',
            'service_id' => 'required|exists:services,id',
            'client' => 'required|min:3',
            'year' => 'required|integer|min:1980'
        ];
        $messages = [
            'name.required' => 'Debes ingresar el nombre del proyecto.',
            'name.min' => 'El nombre del proyecto debe constar de al menos 4 caracteres.',
            'service_id.required' => 'Debes asociar el proyecto a un servicio que tu empresa ofrece.',
            'service_id.exists' => 'El servicio indicado no existe en la base de datos.',
            'client.required' => 'Es necesario ingresar el nombre del cliente.',
            'client.min' => 'El nombre del cliente debe constar de al menos 3 caracteres.',
            'year.required' => 'Debes especificar el año en que se desarrolló el proyecto.',
            'year.integer' => 'El formato del año es inadecuado.',
            'year.min' => 'Se admiten proyectos desarrollados desde el año 1980 en adelante.'
        ];
        $this->validate($request, $rules, $messages);

        $service_id = $request->get('service_id');
        $project = new Project();
        $project->name = $request->get('name');
        $project->service_id = $service_id;
        $project->client = $request->get('client');
        $project->year = $request->get('year');
        $project->user_id = auth()->user()->id;
        $project->acknowledgments = $request->get('acknowledgments');
        $project->question_1 = $request->get('question_1');
        $project->question_2 = $request->get('question_2');
        $project->question_3 = $request->get('question_3');
        $project->save();

        return redirect("/servicio/$service_id/proyectos")->with('notification', 'El proyecto se ha registrado correctamente!');
    }

    public function getByService($id)
    {
        // TODO: Validate if the service is associated with the user
        $service = Service::find($id);
        if (! $service)
            return redirect('/servicios');

        $projects = $service->projects;

        return view('panel.projects.index')->with(compact('service', 'projects'));
    }
    public function createByService($id)
    {
        $service_id = $id;
        return view('panel.projects.create')->with(compact('service_id'));
    }
}
