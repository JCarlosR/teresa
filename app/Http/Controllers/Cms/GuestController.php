<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SocialProfiles;
use App\Project;
use App\Service;
use App\User;

class GuestController extends Controller
{
    private function getTheme(User $user)
    {
        $theme = $user->theme;
        if (! $theme)
            $theme = 'default';

        return $theme;
    }

    public function index($id)
    {
        $me = User::find($id);
        $services = $me->services;

        // social profiles can be used anywhere (via one method defined for the User model)

        $theme = $this->getTheme($me);
        return view("themes.$theme.welcome")->with(compact(
            'me', 'services', 'about_us'));
    }

    public function projects($id)
    {        
        $me = User::find($id);
        $projects = $me->projects;
        $theme = $this->getTheme($me);
        return view("themes.$theme.projects.index")->with(compact('me', 'projects'));
    }

    public function showProject($id, $project)
    {
        $me = User::find($id);
        $project = Project::find($project);
        $theme = $this->getTheme($me);
        return view("themes.$theme.projects.show")->with(compact('me', 'project'));
    }

    public function services($id)
    {
        $me = User::find($id);
        $services = $me->services;
        $theme = $this->getTheme($me);
        return view("themes.$theme.services.index")->with(compact('me', 'services'));
    }

    public function showService($id, $service)
    {
        $me = User::find($id);
        $service = Service::find($service);
        $theme = $this->getTheme($me);
        return view("themes.$theme.services.show")->with(compact('me', 'service'));
    }

    public function aboutUs($id)
    {
        $me = User::find($id);
        $aboutUs = $me->about_us;
        $theme = $this->getTheme($me);
        return view("themes.$theme.about-us")->with(compact('me', 'aboutUs'));
    }

    public function contact($id)
    {
        $me = User::find($id);
        $theme = $this->getTheme($me);
        return view("themes.$theme.contact")->with(compact('me'));
    }
}
