<?php

namespace App\Http\Controllers;

use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class SlideController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $slides = $this->client()->slides;
        return view('client.slides.index')->with(compact('slides'));
    }

    public function create()
    {
        $client = $this->client();
        return view('client.slides.create')->with(compact('client'));
    }
}
