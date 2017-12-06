<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SuperPanelController extends Controller
{
    public function index(Request $request)
    {
        $show = $request->input('mostrar');

        $query = User::client();
        if ($show == 'activos') {
            $query->where('starred', true);
        } elseif ($show == 'inactivos')
            $query->where('starred', false);
        else // order when all are selected
            $query->orderBy('starred', 'desc');

        $clients = $query->get();
        return view('admin.super-panel.index')->with(compact('clients'));
    }

    public function edit(User $client)
    {
        return view('admin.super-panel.edit')->with(compact('client'));
    }
}
