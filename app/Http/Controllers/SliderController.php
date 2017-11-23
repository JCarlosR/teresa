<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Slider;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class SliderController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sliders = $this->client()->sliders;
        return view('client.sliders.index')->with(compact('sliders'));
    }

    public function create()
    {
        return view('client.sliders.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:3'
        ];
        $messages = [
            'name.required' => 'Es necesario ingresar un nombre para el slider.',
            'name.min' => 'El slider debe tener como mínimo 3 caracteres.'
        ];
        $this->validate($request, $rules, $messages);

        $slider = new Slider();
        $slider->name = $request->input('name');
        $slider->user_id = $this->client()->id;
        $slider->save();

        $notification = 'Se ha registrado un nuevo slider satisfactoriamente.';
        return redirect('/sliders')->with(compact('notification'));
    }

    public function edit(Slider $slider)
    {
        return view('client.sliders.edit')->with(compact('slider'));
    }

    public function update(Slider $slider, Request $request)
    {
        $rules = [
            'name' => 'required|min:5'
        ];
        $messages = [
            'name.required' => 'Es necesario ingresar un nombre para el slider.',
            'name.min' => 'El slider debe tener como mínimo 5 caracteres.'
        ];
        $this->validate($request, $rules, $messages);

        // update
        $slider->name = $request->input('name');
        $slider->save();

        $notification = 'Se ha modificado exitosamente el slider.';
        return redirect('/sliders')->with(compact('notification'));
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        $notification = "El slider $slider->name se ha eliminado correctamente.";
        return back()->with(compact('notification'));
    }

}
