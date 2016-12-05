<?php

namespace App\Http\Controllers;

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
        return view('panel.projects.index');
    }
    public function create()
    {
        $service_id = 0;
        return view('panel.projects.create')->with(compact('service_id'));
    }

    public function getByService($id)
    {
        $service = 'Construcción';
        return view('panel.projects.index')->with(compact('service'));
    }
    public function createByService($id)
    {
        $service_id = $id;
        return view('panel.projects.create')->with(compact('service_id'));
    }
}
