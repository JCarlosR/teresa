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
        $this->middleware('as_client');
    }

    public function index()
    {
        $client = $this->client();
        $services = $client->services;
        $projects = $client->projects;
        $links = $client->siteMapLinks()
            ->whereNull('type')
            ->whereNotNull('site_map_link_id')->get();

        $this->addHeadCodeToLinks($links, $client);
        $this->addHeadCodeToServices($services, $client);
        $this->addHeadCodeToProjects($projects, $client);

        if ($client->hasSection('Artículos')) {
            $articles = $client->articles;
            $this->addHeadCodeToArticles($articles, $client);
        }

        return view('client.serp.index')->with(compact(
            'client', 'services', 'projects', 'links', 'articles'
        ));
    }

    public function addHeadCodeToLinks($links, $client) {
        foreach ($links as $link) {
            $data = [
                'title' => $link->name,
                'description' => $link->description,
                'absoluteUrl' => $link->absoluteUrl($client->domain),
                'me' => $client
            ];

            $link->code_string = view()->make('client.serp.header')->with($data)->render();
        }
    }

    public function addHeadCodeToServices($services, $client) {
        foreach ($services as $service) {
            $data = [
                'title' => $service->name,
                'description' => $service->description,
                'absoluteUrl' => $service->absoluteUrl($client->domain),
                'me' => $client
            ];

            $service->code_string = view()->make('client.serp.header')->with($data)->render();
        }
    }

    public function addHeadCodeToProjects($projects, $client) {
        foreach ($projects as $project) {
            $data = [
                'title' => $project->name,
                'description' => $project->description,
                'absoluteUrl' => $project->absoluteUrl($client->domain),
                'me' => $client
            ];

            $project->code_string = view()->make('client.serp.header')->with($data)->render();
        }
    }

    public function addHeadCodeToArticles($articles, $client) {
        foreach ($articles as $article) {
            $data = [
                'title' => $article->meta_title,
                'description' => $article->meta_description,
                'absoluteUrl' => $article->absoluteUrl($client->domain),
                'me' => $client
            ];

            $article->code_string = view()->make('client.serp.header')->with($data)->render();
        }
    }

    public function descriptionServices(Request $request)
    {
        $client = $this->client();
        $client->services_description = $request->input('description');
        $client->save();

        $notification = 'La descripción de la página de servicios se actualizó correctamente.';
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

    public function edit(SiteMapLink $link)
    {
        $client = $this->client();
        return view('client.serp.edit')->with(compact('client', 'link'));
    }

    public function update(Request $request, SiteMapLink $link)
    {
        // dd($request->all());
        $client = $this->client();
        if ($link->user_id == $client->id) {
            $link->name = $request->input('title');
            $link->description = $request->input('description');
            $link->content = $request->input('content');
            $link->save();
        }
        return redirect('/serp/resumen');
    }
}
