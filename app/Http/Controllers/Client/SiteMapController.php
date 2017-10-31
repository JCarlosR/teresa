<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\SiteMapLink;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class SiteMapController extends Controller
{
    public function index()
    {
        $client = auth()->user();
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

        $query_lv1_nodes = SiteMapLink::where('user_id', $client->id)
            ->whereNull('site_map_link_id')->where('id', '<>', $home->id);
        $lv1_nodes = $query_lv1_nodes->get();
        if (count($lv1_nodes) <= 1) {
            $this->createInitialNodes($client->id);
            $lv1_nodes = $query_lv1_nodes->get(); // get after create :D
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

        return view('client.sitemap.index')->with(compact(
            'home', 'projects', 'services', 'brands', 'articles', 'lv1_nodes'
        ));
    }

    public function createInitialNodes($client_id)
    {
        $login = new SiteMapLink();
        $login->user_id = $client_id;
        $login->name = 'Iniciar sesión';
        $login->url = '/login';
        $login->site_map_link_id = null;
        $login->save();

        $siteMap = new SiteMapLink();
        $siteMap->user_id = $client_id;
        $siteMap->name = 'Site Map';
        $siteMap->url = '/sitemap';
        $siteMap->site_map_link_id = null;
        $siteMap->save();

        $faqs = new SiteMapLink();
        $faqs->user_id = $client_id;
        $faqs->name = 'Preguntas frecuentes';
        $faqs->url = '/faqs';
        $faqs->site_map_link_id = null;
        $faqs->save();

        $terms = new SiteMapLink();
        $terms->user_id = $client_id;
        $terms->name = 'Términos y condiciones';
        $terms->url = '/terms';
        $terms->site_map_link_id = null;
        $terms->save();
    }

}
