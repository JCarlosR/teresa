<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectImage;
use Illuminate\Http\Request;

use App\Http\Requests;

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
    }

    public function delete($id)
    {
        $projectImage = ProjectImage::find($id);
        $projectId = $projectImage->project_id;
        $deleted = $projectImage->delete();

        if ($deleted)
            $notification = 'Se ha eliminado la imagen seleccionada.';
        else
            $notification = 'No se ha podido eliminar la imagen seleccionada.';

        return redirect("proyecto/$projectId/imagenes")->with('notification', $notification);
    }
}
