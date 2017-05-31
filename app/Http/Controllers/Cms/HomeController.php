<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getUserId()
    {
        // TODO: Calculate the user id based on the domain
        return 25;
    }

    public function index()
    {
        $c = new GuessController();
        return $c->index($this->getUserId());
    }

    public function projects()
    {
        $c = new GuessController();
        return $c->projects($this->getUserId());
    }

    public function showProject($project)
    {
        $c = new GuessController();
        return $c->showProject($this->getUserId(), $project);
    }

    public function services()
    {
        $c = new GuessController();
        return $c->services($this->getUserId());
    }

    public function showService($service)
    {
        $c = new GuessController();
        return $c->showService($this->getUserId(), $service);
    }

    public function aboutUs()
    {
        $c = new GuessController();
        return $c->aboutUs($this->getUserId());
    }

    public function contact()
    {
        $c = new GuessController();
        return $c->contact($this->getUserId());
    }
}
