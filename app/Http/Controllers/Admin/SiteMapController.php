<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SiteMapLink;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class SiteMapController extends Controller
{
    use AccessClientAsAdmin;

    public function index()
    {
        $client = $this->client();
        $home = SiteMapLink::where('user_id', $client->id)
            ->orderBy('id', 'asc')->first();

        if (!$home) {
            $home = new SiteMapLink();
            $home->user_id = $client->id;
            $home->name = 'Inicio';
            $home->description = 'Página de inicio';
            $home->url = '/';
            $home->site_map_link_id = null;
            $home->save();
        }

        $hasProjectsNode = $client->siteMapLinks()->where('type', 'projects')->exists();
        if ($hasProjectsNode)
            $projects = $client->projects;

        $hasServicesNode = $client->siteMapLinks()->where('type', 'services')->exists();
        if ($hasServicesNode)
            $services = $client->services;

        $hasArticlesNode = $client->siteMapLinks()->where('type', 'articles')->exists();
        if ($hasArticlesNode)
            $articles = $client->articles;

        $hasBrandsNode = $client->siteMapLinks()->where('type', 'brands')->exists();
        if ($hasBrandsNode)
            $brands = $client->brands;

        return view('admin.sitemap.index')->with(compact(
            'home', 'projects', 'services', 'brands', 'articles'
        ));
    }

    public function update(Request $request)
    {
        $siteMapLink = SiteMapLink::find($request->site_map_link_id);

        // validate if the link belongs to the client
        $client = $this->client();
        if ($siteMapLink->user_id == $client->id) {
            if ($request->input('check-delete') == '1') {
                $siteMapLink->children()->delete();
                $siteMapLink->delete();
            } else {
                $siteMapLink->name = $request->name;
                $siteMapLink->url = $request->url;
                $siteMapLink->type = $request->type === '0'  ? null : $request->type;
                $siteMapLink->save();
            }
        }

        return back();
    }

    public function store(Request $request)
    {
        $client = $this->client();

        $siteMapLink = new SiteMapLink();

        $uniqueId = uniqid();

        // TO DO - validate if the parent link belongs to the client
        $siteMapLink->name = $request->name ?: 'Nodo nuevo';
        $siteMapLink->description = $request->description ?: "Sin descripción";
        $siteMapLink->url = $request->url ?: "/nodo-$uniqueId";
        $siteMapLink->site_map_link_id = $request->add_to;
        $siteMapLink->user_id = $client->id;
        $siteMapLink->save();

        return back();
    }
}
