<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PersonalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getPersonal()
    {
        return view('panel.personal');
    }
    public function postPersonal(Request $request)
    {

    }
}
