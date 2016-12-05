<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $clients = [
            'Vértice Arquitectos',
            'Lindley Arquitectos',
            'Alfredo Queirolo',
            'Diaz Marchani',
            'JMPolo Arquitectos'
        ];
        return view('admin.home')->with(compact('clients'));
    }

    public function showClient()
    {
        return view('admin.client_dashboard');
    }
}
