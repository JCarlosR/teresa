<?php

namespace App\Http\Controllers;

use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class SERPController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $client = $this->client();
        return view('client.serp')->with(compact('client'));
    }
}
