<?php

namespace App\Http\Controllers;

use App\ArchitectProject;
use App\ArchitectProjects;
use App\Project;
use App\ServerAccess;
use App\Service;
use App\Teresa\Admin\AccessClientAsAdmin;
use App\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = $this->client()->projects;
        $description = $this->client()->projects_description;
        $presentation = $this->client()->presentation('projects');
        return view('client.projects.index')->with(compact('projects', 'description', 'presentation'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);

        // Check if the project really belongs to the user
        if ($project->user_id !== $this->client()->id)
            return redirect('/proyectos');

        $client = $this->client();
        return view('client.projects.show')->with(compact('client', 'project'));
    }

    public function create()
    {
        $client = $this->client();
        $services = $client->services;
        return view('client.projects.create')->with(compact('client', 'services'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:4|unique:projects,name',
            'description' => 'max:155',
            'services.*' => 'exists:services,name',
            'client' => 'min:3',
            'year' => 'required|integer|min:1980'
        ];
        $messages = [
            'name.unique' => 'Este nombre de proyecto ya se encuentra registrado. Por favor usa otro.',
            'name.required' => 'Debes ingresar el nombre del proyecto.',
            'name.min' => 'El nombre del proyecto debe constar de al menos 4 caracteres.',
            'description.max' => 'La descripción del proyecto es muy extensa (resumen).',
            'services.*' => 'El servicio indicado en :attribute no existe en la base de datos (el primero es posición 0).',
            'client.min' => 'El nombre del cliente debe constar de al menos 3 caracteres.',
            'year.required' => 'Debes especificar el año en que se desarrolló el proyecto.',
            'year.integer' => 'El formato del año es inadecuado.',
            'year.min' => 'Se admiten proyectos desarrollados desde el año 1980 en adelante.'
        ];
        $this->validate($request, $rules, $messages);

        $services_name = $request->get('services') ?: [];

        $project = new Project();
        $project->user_id = $this->client()->id;

        $project->name = $request->get('name');
        $project->title = $request->get('title');
        $project->description = $request->get('description') ?: '';
        $project->client = $request->get('client');
        $project->year = $request->get('year');
        $project->type = $request->get('type');
        $project->duration = $request->get('duration');
        $project->status = $request->get('status');
        $project->acknowledgments = $request->get('acknowledgments');

        $project->question_0 = $request->get('question_0');
        $project->question_1 = $request->get('question_1');
        $project->question_2 = $request->get('question_2');
        $project->question_3 = $request->get('question_3');

        $project->save();

        foreach ($services_name as $service_name) {
            $service = Service::where('name', $service_name)->first();
            if ($service)
                $project->services()->attach($service);
        }

        if ($this->client()->client_type_id) {
            if ($this->client()->client_type_id==1) { // SEO Architects

                $architect_project = new ArchitectProject();
                $architect_project->architect = $request->get('architect');
                $architect_project->structure = $request->get('structure');
                $architect_project->management = $request->get('management');
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
        if ($project->user_id !== $this->client()->id)
            return redirect('/proyectos');

        $client = $this->client();
        $services = $client->services;
        return view('client.projects.edit')->with(compact('client', 'project', 'services'));
    }

    public function update(Request $request)
    {
        $rules = [
            'project_id' => 'required|exists:projects,id',
            'name' => 'required|min:4',
            'description' => 'max:155',
            'services.*' => 'exists:services,name',
            'client' => 'min:3',
            'year' => 'required|integer|min:1980'
        ];
        $messages = [
            'project_id.required' => 'Es necesario indicar el proyecto que se va a editar.',
            'project_id.exists' => 'El proyecto indicado no existe en nuestra base de datos.',
            'name.required' => 'Debes ingresar el nombre del proyecto.',
            'name.min' => 'El nombre del proyecto debe constar de al menos 4 caracteres.',
            'description.max' => 'La descripción del proyecto es muy extensa (resumen).',
            'services.*' => 'El servicio indicado en :attribute no existe en la base de datos (el primero es posición 0).',
            // 'client.required' => 'Es necesario ingresar el nombre del cliente.',
            'client.min' => 'El nombre del cliente debe constar de al menos 3 caracteres.',
            'year.required' => 'Debes especificar el año en que se desarrolló el proyecto.',
            'year.integer' => 'El formato del año es inadecuado.',
            'year.min' => 'Se admiten proyectos desarrollados desde el año 1980 en adelante.'
        ];
        $this->validate($request, $rules, $messages);

        $services_name = $request->get('services') ?: [];

        $project = Project::find($request->get('project_id'));
        $project->name = $request->get('name');
        $project->title = $request->get('title');
        $project->description = $request->get('description');
        $project->client = $request->get('client');
        $project->year = $request->get('year');
        $project->type = $request->get('type');
        $project->duration = $request->get('duration');
        $project->status = $request->get('status');
        $project->acknowledgments = $request->get('acknowledgments');

        $project->question_0 = $request->get('question_0');
        $project->question_1 = $request->get('question_1');
        $project->question_2 = $request->get('question_2');
        $project->question_3 = $request->get('question_3');

        $project->save();

        if ($this->client()->client_type_id) {
            if ($this->client()->client_type_id==1) { // SEO Architects

                $architect_project = $project->architect_project;

                if (! $architect_project) {
                    $architect_project = new ArchitectProject();
                    $architect_project->project_id = $project->id;
                }

                $architect_project->architect = $request->get('architect');
                $architect_project->structure = $request->get('structure');
                $architect_project->management = $request->get('management');
                $architect_project->location = $request->get('location');
                $architect_project->ground_area = $request->get('ground_area');
                $architect_project->project_area = $request->get('project_area');
                $architect_project->builder = $request->get('builder');
                $architect_project->floors = $request->get('floors');
                $architect_project->basements = $request->get('basements');

                $architect_project->save();
            }
        }

        $services = [];
        foreach ($services_name as $service_name) {
            $service = Service::where('name', $service_name)->first(['id']);
            if ($service)
                $services[] = $service->id;
        }
        $project->services()->sync($services);

        // $notification = 'El proyecto se ha actualizado correctamente!';
        return redirect('/proyecto/'.$project->id.'/ver');
    }

    public function delete($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        $notification = 'El proyecto seleccionado se ha eliminado correctamente.';
        return back()->with(compact('notification'));
    }
}
