<?php

namespace App\Http\Controllers;

use App\SiteMapLink;
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
        $links = $client->siteMapLinks()
            ->whereNull('type')
            ->whereNotNull('site_map_link_id')->get();
        return view('client.serp')->with(compact('client', 'services', 'projects', 'links'));
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

    public function link(SiteMapLink $link)
    {
        $me = $this->client();
        $content = view()->make('client.serp.header')->with(compact('link', 'me'));

        $filename = ($link->name ?: $link->id).'.txt';

        $headers = [
            'Content-Type' => 'plain/txt',
            'Content-Disposition' => sprintf('attachment; filename="%s"', $filename)
        ];

        return response()->make($content, '200', $headers);
    }
}
