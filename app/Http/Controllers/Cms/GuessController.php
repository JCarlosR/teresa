<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SocialProfiles;
use App\Project;
use App\Service;
use App\User;

class GuessController extends Controller
{
    public function index($id)
    {  
        $me = User::find($id);
        $services = $me->services;

        if ($me->about_us)
            $me->about_us = $me->about_us->description;
        else
            $me->about_us = '';

        // social profiles can be used anywhere (via one method defined for the User model)

        return view('themes.classify.welcome')->with(compact(
            'me', 'services', 'about_us'
        ));
    }

    public function projects($id)
    {
        $me = User::find($id);
        $projects = $me->projects;
        return view('themes.classify.projects.index')->with(compact('me', 'projects'));
    }

    public function showProject($id, $project)
    {
        $me = User::find($id);
        $project = Project::find($project);
        return view('themes.classify.projects.show')->with(compact('me', 'project'));
    }

    public function services($id)
    {
        $me = User::find($id);
        $services = $me->services;
        return view('themes.classify.services.index')->with(compact('me', 'services'));
    }

    public function showService($id, $service)
    {
        $me = User::find($id);
        $service = Service::find($service);
        return view('themes.classify.services.show')->with(compact('me', 'service'));
    }

    public function aboutUs($id)
    {
        $me = User::find($id);
        $aboutUs = $me->about_us;
        return view('themes.classify.about-us')->with(compact('me', 'aboutUs'));
    }

    public function contact($id)
    {
        $me = User::find($id);
        return view('themes.classify.contact')->with(compact('me'));
    }
}
