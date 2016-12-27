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
        $client_id = session('client_id');
        return view('admin.personal')->with(compact('client_id'));
    }
    public function postPersonal(Request $request)
    {

    }
}
