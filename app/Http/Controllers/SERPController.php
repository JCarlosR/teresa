<?php

namespace App\Http\Controllers;

use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class SERPController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $client = $this->client();
        $services = $client->services;
        $projects = $client->projects;
        return view('client.serp')->with(compact('client', 'services', 'projects'));
    }

    public function descriptionServices(Request $request)
    {
        $client = $this->client();
        $client->services_description = $request->input('description');
        $client->save();

        $notification = 'La descripción de los servicios se actualizó correctamente.';
        return back()->with(compact('notification'));
    }

    public function descriptionProjects(Request $request)
    {
        $client = $this->client();
        $client->projects_description = $request->input('description');
        $client->save();

        $notification = 'La descripción de los proyectos se actualizó correctamente.';
        return back()->with(compact('notification'));
    }

    public function descriptionQuotes(Request $request)
    {
        $client = $this->client();
        $client->quotes_description = $request->input('description');
        $client->save();

        $notification = 'La descripción de las citas se actualizó correctamente.';
        return back()->with(compact('notification'));
    }
}
