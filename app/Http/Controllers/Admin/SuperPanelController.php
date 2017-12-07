<?php

namespace App\Http\Controllers\Admin;

use App\ClientState;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SuperPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $show = $request->input('mostrar');

        $query = User::with('state')->client();
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
        $state = $client->state;
        return view('admin.super-panel.edit')->with(compact('client', 'state'));
    }

    public function update(Request $request, User $client)
    {
        $clientState = ClientState::firstOrCreate([
            'user_id' => $client->id
        ]);
        $data = $request->only([
            'sitemap', 'website', 'google_analytics',
            'social_media', 'professional_media', 'broadcasting'
        ]);
        $updated = $clientState->update($data);

        if ($updated)
            $notification = "Se ha actualizado el estado del cliente $client->name, y se ha registrado una nueva revisión.";
        return redirect('/admin/super')->with(compact('notification'));
    }
}
