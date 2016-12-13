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
