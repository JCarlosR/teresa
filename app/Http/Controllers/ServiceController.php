<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

use App\Http\Requests;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $services = auth()->user()->services;
        return view('panel.services.index')->with(compact('services'));
    }

    public function create()
    {
        return view('panel.services.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required'
        ];
        $messages = [
            'name.required' => 'Debe ingresar un nombre para el servicio'
        ];
        $this->validate($request, $rules, $messages);

        $service = new Service();
        $service->user_id = auth()->user()->id;
        $service->name = $request->get('name');
        $service->question_1 = $request->get('question_1');
        $service->question_2 = $request->get('question_2');
        $service->question_3 = $request->get('question_3');
        $service->question_4 = $request->get('question_4');
        $service->question_5 = $request->get('question_5');
        $service->save();

        return redirect('/servicios')->with('notification', 'El servicio se ha registrado correctamente.');
    }
}
