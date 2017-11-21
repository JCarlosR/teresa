<?php

namespace App\Http\Controllers;

use App\SiteMapLink;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;
use stdClass;

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

        $general_pages = $this->getHeadCodeForGeneralPages($client);

        return view('client.serp.index')->with(compact(
            'client', 'services', 'projects', 'links', 'articles', 'general_pages'
        ));
    }

    public function getHeadCodeForGeneralPages($client)
    {
        $general_pages = collect();

        $root_page = new stdClass();
        $root_page->id = 'root';
        $root_page->title = $client->title;
        $root_page->description = $client->description;
        $root_page->absoluteUrl = $client->domain;
        $root_page = $this->addHeadCodeToGeneralPage($root_page, $client);
        $general_pages->push($root_page);

        $services_page = new stdClass();
        $services_page->id = 'services';
        $services_page->title = $client->trade_name . ' - Servicios';
        $services_page->description = $client->services_description;
        $services_page->absoluteUrl = $client->domain . '/servicios';
        $services_page = $this->addHeadCodeToGeneralPage($services_page, $client);
        $general_pages->push($services_page);

        $projects_page = new stdClass();
        $projects_page->id = 'projects';
        $projects_page->title = $client->trade_name . ' - Proyectos';
        $projects_page->description = $client->projects_description;
        $projects_page->absoluteUrl = $client->domain . '/proyectos';
        $projects_page = $this->addHeadCodeToGeneralPage($projects_page, $client);
        $general_pages->push($projects_page);

        $about_us_page = new stdClass();
        $about_us_page->id = 'about_us';
        $about_us_page->title = $client->trade_name . ' - Nosotros';
        $about_us_page->description = $client->about_us->description;
        $about_us_page->absoluteUrl = $client->domain . '/nosotros';
        $about_us_page = $this->addHeadCodeToGeneralPage($about_us_page, $client);
        $general_pages->push($about_us_page);

        return $general_pages;
    }

    public function addHeadCodeToGeneralPage($general_page, $client)
    {
        $data = [
            'title' => $general_page->title,
            'description' => $general_page->description,
            'absoluteUrl' => $general_page->absoluteUrl,
            'me' => $client
        ];
        $general_page->code_string = view()->make('client.serp.header')->with($data)->render();
        return $general_page;
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
