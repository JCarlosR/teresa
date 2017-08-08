<?php

namespace App\Http\Controllers;

use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('client.articles.index');
    }

    public function create()
    {
        $client = $this->client();
        return view('client.articles.create')->with(compact('client'));
    }

}
