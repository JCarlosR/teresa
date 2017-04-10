<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkScheduleController extends Controller
{
    public function index()
    {
        return view('admin.work.index');
    }

    public function show($id)
    {
        $client = User::find(session('client_id'));
        return view('admin.work.show')->with(compact('client'));
    }

    public function edit()
    {
        return view('admin.work.edit');
    }
}
