<?php

namespace App\Http\Controllers;

use App\Project;
use App\Service;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->middleware('auth');

        // Projects associated with
        if (auth()->user()->is_admin)
            $this->user = User::find(session('client_id'));
        else
            $this->user = auth()->user();
    }

    public function index()
    {
        $projects = $this->user->projects;
        return view('client.projects.index')->with(compact('projects'));
    }

    public function create()
    {
        $service_id = 0;
        $services = $this->user->services;
        return view('client.projects.create')->with(compact('service_id', 'services'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:4',
            'service_id' => 'exists:services,id',
            'client' => 'required|min:3',
            'year' => 'required|integer|min:1980'
        ];
        $messages = [
            'name.required' => 'Debes ingresar el nombre del proyecto.',
            'name.min' => 'El nombre del proyecto debe constar de al menos 4 caracteres.',
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
        $project->service_id = $service_id ?: null;
        $project->client = $request->get('client');
        $project->year = $request->get('year');
        $project->user_id = $this->user->id;
        $project->acknowledgments = $request->get('acknowledgments');
        $project->question_1 = $request->get('question_1');
        $project->question_2 = $request->get('question_2');
        $project->question_3 = $request->get('question_3');
        $project->save();

        $notification = 'El proyecto se ha registrado correctamente!';
        session()->flash('notification', $notification);

        return redirect('/proyectos');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        if (! $project)
            return redirect('/proyectos');

        // Check if the project really belongs to the user
        if ($project->user_id !== $this->user->id)
            return redirect('/proyectos');

        $services = $this->user->services;
        $service_id = 0;
        return view('client.projects.edit')->with(compact('project', 'services', 'service_id'));
    }

    public function update(Request $request)
    {
        $rules = [
            'project_id' => 'required|exists:projects,id',
            'name' => 'required|min:4',
            'service_id' => 'exists:services,id',
            'client' => 'required|min:3',
            'year' => 'required|integer|min:1980'
        ];
        $messages = [
            'project_id.required' => 'Es necesario indicar el proyecto que se va a editar.',
            'project_id.exists' => 'El proyecto indicado no existe en nuestra base de datos.',
            'name.required' => 'Debes ingresar el nombre del proyecto.',
            'name.min' => 'El nombre del proyecto debe constar de al menos 4 caracteres.',
            'service_id.exists' => 'El servicio indicado no existe en la base de datos.',
            'client.required' => 'Es necesario ingresar el nombre del cliente.',
            'client.min' => 'El nombre del cliente debe constar de al menos 3 caracteres.',
            'year.required' => 'Debes especificar el año en que se desarrolló el proyecto.',
            'year.integer' => 'El formato del año es inadecuado.',
            'year.min' => 'Se admiten proyectos desarrollados desde el año 1980 en adelante.'
        ];
        $this->validate($request, $rules, $messages);

        $service_id = $request->get('service_id');
        $project = Project::find($request->get('project_id'));
        $project->name = $request->get('name');
        $project->service_id = $service_id ?: null;
        $project->client = $request->get('client');
        $project->year = $request->get('year');
        $project->acknowledgments = $request->get('acknowledgments');
        $project->question_1 = $request->get('question_1');
        $project->question_2 = $request->get('question_2');
        $project->question_3 = $request->get('question_3');
        $project->save();

        $notification = 'El proyecto se ha actualizado correctamente!';

        if ($service_id)
            return redirect("/servicio/$service_id/proyectos")->with('notification', $notification);

        return redirect('/proyectos')->with('notification', $notification);
    }
}
