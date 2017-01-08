<?php

namespace App\Http\Controllers;

use App\ArchitectProject;
use App\ArchitectProjects;
use App\Project;
use App\User;
use Illuminate\Http\Request;

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
        $client = $this->user;
        $services = $this->user->services;
        return view('client.projects.create')->with(compact('client', 'services'));
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
        $project->user_id = $this->user->id;

        $project->name = $request->get('name');
        $project->service_id = $service_id ?: null;
        $project->client = $request->get('client');
        $project->year = $request->get('year');
        $project->type = $request->get('type');
        $project->duration = $request->get('duration');
        $project->status = $request->get('status');
        $project->acknowledgments = $request->get('acknowledgments');

        $project->question_1 = $request->get('question_1');
        $project->question_2 = $request->get('question_2');
        $project->question_3 = $request->get('question_3');

        $project->save();

        if ($this->user->client_type_id) {
            if ($this->user->client_type_id==1) { // SEO Architects

                $architect_project = new ArchitectProject();
                $architect_project->architect = $request->get('architect');
                $architect_project->structure = $request->get('structure');
                $architect_project->location = $request->get('location');
                $architect_project->ground_area = $request->get('ground_area');
                $architect_project->project_area = $request->get('project_area');
                $architect_project->builder = $request->get('builder');
                $architect_project->floors = $request->get('floors');
                $architect_project->basements = $request->get('basements');

                $architect_project->project_id = $project->id;
                $architect_project->save();
            }
        }

        $notification = 'El proyecto se ha registrado correctamente!';
        session()->flash('notification', $notification);

        return redirect('/proyectos');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        // Check if the project really belongs to the user
        if ($project->user_id !== $this->user->id)
            return redirect('/proyectos');

        $services = $this->user->services;
        $client = $this->user;
        return view('client.projects.edit')->with(compact('client', 'project', 'services'));
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
        $project->type = $request->get('type');
        $project->duration = $request->get('duration');
        $project->status = $request->get('status');
        $project->acknowledgments = $request->get('acknowledgments');

        $project->question_1 = $request->get('question_1');
        $project->question_2 = $request->get('question_2');
        $project->question_3 = $request->get('question_3');

        $project->save();

        if ($this->user->client_type_id) {
            if ($this->user->client_type_id==1) { // SEO Architects

                $architect_project = $project->architect_project;
                $architect_project->architect = $request->get('architect');
                $architect_project->structure = $request->get('structure');
                $architect_project->location = $request->get('location');
                $architect_project->ground_area = $request->get('ground_area');
                $architect_project->project_area = $request->get('project_area');
                $architect_project->builder = $request->get('builder');
                $architect_project->floors = $request->get('floors');
                $architect_project->basements = $request->get('basements');

                $architect_project->save();
            }
        }

        $notification = 'El proyecto se ha actualizado correctamente!';
        return redirect('/proyectos')->with(compact('notification'));
    }

    public function delete($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        $notification = 'El proyecto seleccionado se ha eliminado correctamente.';
        return back()->with(compact('notification'));
    }
}
