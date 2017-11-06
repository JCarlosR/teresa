<?php

namespace App\Http\Controllers\Cms;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TemporalController extends Controller
{
    public function index(User $client)
    {
        return view('cms.temporal')->with(compact('client'));
    }
}
