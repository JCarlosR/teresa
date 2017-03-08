<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InboxController extends Controller
{
    public function index()
    {
        return view('client.inbox.index');
    }

    public function config()
    {
        return view('client.inbox.config');
    }
}
