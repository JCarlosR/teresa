<?php

namespace App\Http\Controllers;

use App\ServerAccess;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    use ClientDashboard;

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function select($client_id)
    {
        $client = User::find($client_id);
        if (! $client)
            return redirect('/admin');

        // Set session variable to show the client name in the left menu
        session()->put('client_id', $client->id);
        session()->put('client_name', $client->name);
        session()->put('client_photo_route', $client->photo_route);

        return redirect('/admin/dashboard');
    }

    public function index()
    {
        $clients = User::client()->get();
        return view('admin.index')->with(compact('clients'));
    }

}
