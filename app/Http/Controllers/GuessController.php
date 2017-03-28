<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GuessController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function privacy()
    {
        return view('guess.privacy');
    }
}
