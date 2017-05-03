<?php

namespace App\Http\Controllers\Cms;

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
}
