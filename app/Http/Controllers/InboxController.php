<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class InboxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        // Projects associated with
        if (auth()->user()->is_admin)
            $this->user = User::find(session('client_id'));
        else
            $this->user = auth()->user();
    }

    public function index()
    {
        return view('client.inbox.index');
    }

    public function config()
    {
        $client = $this->user;
        return view('client.inbox.config', compact('client'));
    }
}
