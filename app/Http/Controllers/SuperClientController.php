<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class SuperClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('super_client');
    }

    public function select($client_id)
    {
        $client = User::find($client_id);
        if (! $client)
            return redirect('/super/client');

        // Set session variable to show the client name in the left menu
        session()->put('client_id', $client->id);
        session()->put('client_name', $client->trade_name);
        session()->put('client_photo_route', $client->photo_route);

        return redirect('/admin/dashboard');
    }

    public function index(Request $request)
    {
        $query = User::client()->where('parent_id', auth()->user()->id);
        $clients = $query->get();

        return view('admin.index')->with(compact('clients'));
    }

    public function impersonate($client_id)
    {
        $client = User::findOrFail($client_id);
        auth()->login($client);
        return redirect('/');
    }

}
