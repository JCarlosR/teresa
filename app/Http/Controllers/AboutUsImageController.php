<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\AboutUsImage;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;

class AboutUsImageController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->middleware('auth');

        // Projects associated with
        if (auth()->user()->is_admin)
            $this->user = User::find(session('client_id'));
        else
            $this->user = auth()->user();
    }

    public function index()
    {
        $about_us = $this->user->about_us;
        return view('client.about-us.images.index')->with(compact('about_us'));
    }

    public function upload(Request $request)
    {
        $file = $request->file('file');
        $path = public_path() . '/images/about-us';
        $fileName = uniqid() . $file->getClientOriginalName();

        $file->move($path, $fileName);

        $aboutUsImage = new AboutUsImage();
        $aboutUsImage->about_us_id = $this->user->about_us->id;
        $aboutUsImage->user_id = auth()->user()->id;
        $aboutUsImage->file_name = $fileName;
        $aboutUsImage->save();

        return $aboutUsImage;
    }

    public function delete($id)
    {
        $aboutUsImage = AboutUsImage::find($id);

        $path = public_path() . '/images/about-us/' . $aboutUsImage->file_name;
        if(File::isFile($path)){
            File::delete($path);
        }

        $deleted = $aboutUsImage->delete();

        if ($deleted)
            $notification = 'Se ha eliminado la imagen seleccionada.';
        else
            $notification = 'No se ha podido eliminar la imagen seleccionada.';

        return redirect("nosotros/imagenes")->with('notification', $notification);
    }

    public function edit($id)
    {
        $image = AboutUsImage::find($id);
        $about_us = $image->project;
        return view('client.about-us.images.edit')->with(compact('image', 'about_us'));
    }

    public function update($id, Request $request)
    {
        $image = AboutUsImage::find($id);
        $image->name = $request->input('name');
        $image->description = $request->input('description');
        $image->save();

        $notification = 'La datos de la imagen se han actualizado correctamente.';
        return back()->with('notification', $notification);
    }
}
