<?php

namespace App\Http\Controllers;

use App\Service;
use App\ServiceImage;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;

class ServiceImageController extends Controller
{

    public function index($id)
    {
        $service = Service::find($id);
        return view('client.services.images.index')->with(compact('service'));
    }

    public function upload($id, Request $request)
    {
        $file = $request->file('file');
        $path = public_path() . '/images/services';
        $fileName = uniqid() . $file->getClientOriginalName();

        $file->move($path, $fileName);

        $serviceImage = new ServiceImage();
        $serviceImage->service_id = $id;
        $serviceImage->user_id = auth()->user()->id;
        $serviceImage->file_name = $fileName;
        $serviceImage->save();

        return $serviceImage;
    }

    public function delete($id)
    {
        $serviceImage = ServiceImage::find($id);
        $serviceId = $serviceImage->service_id;

        $path = public_path() . '/images/services/' . $serviceImage->file_name;
        if (File::isFile($path)) {
            File::delete($path);
        }

        $deleted = $serviceImage->delete();

        if ($deleted)
            $notification = 'Se ha eliminado la imagen seleccionada.';
        else
            $notification = 'No se ha podido eliminar la imagen seleccionada.';

        return redirect("servicio/$serviceId/imagenes")->with('notification', $notification);
    }

    public function edit($id)
    {
        $image = ServiceImage::find($id);
        $service = $image->service;
        return view('client.services.images.edit')->with(compact('image', 'service'));
    }

    public function update($id, Request $request)
    {
        $image = ServiceImage::find($id);
        $image->name = $request->input('name');
        $image->description = $request->input('description');
        $image->save();

        $notification = 'La datos de la imagen se han actualizado correctamente.';
        return back()->with('notification', $notification);
    }

}
