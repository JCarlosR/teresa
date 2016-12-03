<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getMain()
    {
        return view('panel.data.main');
    }

    public function getAccessData()
    {
        return view('panel.data.access');
    }

}
