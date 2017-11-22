<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Slider;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;

class SlideController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Slider $slider)
    {
        $slides = $slider->slides;
        return view('client.slides.index')->with(compact('slides', 'slider'));
    }

    public function create(Slider $slider)
    {
        $client = $this->client();
        return view('client.slides.create')->with(compact('client', 'slider'));
    }

    public function store(Request $request, $slider)
    {
        $rules = [
            'title' => 'required|min:4',
            'description' => 'max:255'
        ];
        $messages = [
            'title.require' => 'Es necesario ingresar un título para el slide (incluso si no se va a mostrar).',
            'title.min' => 'El título debe presentar al menos 4 caracteres.',
            'description.max' => 'La descripción admite un máximo de 255 caracteres.'
        ];
        $this->validate($request, $rules, $messages);

        $slide = new Slide();
        $slide->user_id = $this->client()->id;
        $slide->title = $request->get('title');
        $slide->description = $request->get('description');
        $slide->url = $request->get('url');
        $slide->slider_id = $slider;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = public_path() . '/images/slides';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);

            $slide->image = $fileName;

        } else $slide->image = '';

        $slide->save();

        $notification = 'El slide se ha registrado correctamente!';
        session()->flash('notification', $notification);

        return redirect('/sliders/'.$slider.'/slides');
    }

    public function edit(Slider $slider, Slide $slide)
    {
        $client = $this->client();
        return view('client.slides.edit')->with(compact('client', 'slider', 'slide'));
    }

    public function update(Request $request, $slider, Slide $slide)
    {
        $rules = [
            'title' => 'required|min:4',
            'description' => 'max:255'
        ];
        $messages = [
            'title.require' => 'Es necesario ingresar un título para el slide (incluso si no se va a mostrar).',
            'title.min' => 'El título debe presentar al menos 4 caracteres.',
            'description.max' => 'La descripción admite un máximo de 255 caracteres.'
        ];
        $this->validate($request, $rules, $messages);


        $slide->title = $request->get('title');
        $slide->description = $request->get('description');
        $slide->url = $request->get('url');

        if ($request->hasFile('image')) {
            // TO DO: Remove the previous image
            $file = $request->file('image');
            $path = public_path() . '/images/slides';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);

            $slide->image = $fileName;
        }

        $slide->save();

        $notification = 'El slide se ha modificado exitosamente!';
        session()->flash('notification', $notification);

        return redirect('/sliders/'.$slider.'/slides');
    }

    public function delete($slider, Slide $slide)
    {
        $path = public_path() . '/images/slides/' . $slide->image;
        if (File::isFile($path)) {
            File::delete($path);
        }

        $deleted = $slide->delete();

        if ($deleted)
            $notification = 'Se ha eliminado la slide seleccionada.';
        else
            $notification = 'No se ha podido eliminar la slide seleccionada.';

        return redirect('/sliders/'.$slider.'/slides')->with(compact('notification'));
    }
}
