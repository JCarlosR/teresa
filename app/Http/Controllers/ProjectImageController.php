<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectImage;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;

class ProjectImageController extends Controller
{
    public function index($id)
    {
        $project = Project::find($id);
        return view('client.projects.images.index')->with(compact('project'));
    }

    public function upload($id, Request $request)
    {
        $file = $request->file('file');
        $path = public_path() . '/images/projects';
        $fileName = uniqid() . $file->getClientOriginalName();

        $file->move($path, $fileName);

        $projectImage = new ProjectImage();
        $projectImage->project_id = $id;
        $projectImage->user_id = auth()->user()->id;
        $projectImage->file_name = $fileName;
        $projectImage->save();

        return $projectImage;
    }

    public function delete($id)
    {
        $projectImage = ProjectImage::find($id);
        $projectId = $projectImage->project_id;

        $path = public_path() . '/images/projects/' . $projectImage->file_name;
        if(File::isFile($path)){
            File::delete($path);
        }

        $deleted = $projectImage->delete();

        if ($deleted)
            $notification = 'Se ha eliminado la imagen seleccionada.';
        else
            $notification = 'No se ha podido eliminar la imagen seleccionada.';

        return redirect("proyecto/$projectId/imagenes")->with('notification', $notification);
    }

    public function edit($id)
    {
        $image = ProjectImage::find($id);
        $project = $image->project;
        return view('client.projects.images.edit')->with(compact('image', 'project'));
    }

    public function update($id, Request $request)
    {
        $image = ProjectImage::find($id);
        $image->name = $request->input('name');
        $image->description = $request->input('description');
        $image->save();

        $notification = 'La datos de la imagen se han actualizado correctamente.';
        return back()->with('notification', $notification);
    }
}
