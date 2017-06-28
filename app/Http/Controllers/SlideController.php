<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class SlideController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $slides = $this->client()->slides;
        return view('client.slides.index')->with(compact('slides'));
    }

    public function create()
    {
        $client = $this->client();
        return view('client.slides.create')->with(compact('client'));
    }

    public function store(Request $request)
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

        return redirect('/slides');
    }
}
