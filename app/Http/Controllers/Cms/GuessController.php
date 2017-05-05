<?php

namespace App\Http\Controllers\Cms;

use App\Service;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GuessController extends Controller
{
    public function index($id)
    {
        $me = User::find($id);
        $services = $me->services;
        return view('themes.default.welcome')->with(compact('me', 'services'));
    }

    public function projects($id)
    {
        $me = User::find($id);
        $projects = $me->projects;
        return view('themes.default.projects.index')->with(compact('me', 'projects'));
    }

    public function showProject($id, $project)
    {
        $me = User::find($id);
        $project = Service::find($project);
        return view('themes.default.projects.show')->with(compact('me', 'project'));
    }

    public function services($id)
    {
        $me = User::find($id);
        $services = $me->services;
        return view('themes.default.services.index')->with(compact('me', 'services'));
    }

    public function showService($id, $service)
    {
        $me = User::find($id);
        $service = Service::find($service);
        return view('themes.default.services.show')->with(compact('me', 'service'));
    }

    public function aboutUs($id)
    {
        $me = User::find($id);
        $aboutUs = $me->about_us;
        return view('themes.default.about-us')->with(compact('me', 'aboutUs'));
    }

    public function contact($id)
    {
        $me = User::find($id);
        return view('themes.default.contact')->with(compact('me'));
    }
}
