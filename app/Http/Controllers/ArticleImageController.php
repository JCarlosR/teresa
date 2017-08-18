<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleImage;
use File;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleImageController extends Controller
{
    public function index($id)
    {
        $article = Article::find($id);
        return view('client.articles.images.index')->with(compact('article'));
    }

    public function upload($id, Request $request)
    {
        $file = $request->file('file');
        $path = public_path() . '/images/articles';
        $fileName = uniqid() . $file->getClientOriginalName();

        $file->move($path, $fileName);

        $articleImage = new ArticleImage();
        $articleImage->article_id = $id;
        $articleImage->user_id = auth()->user()->id;
        $articleImage->file_name = $fileName;
        $articleImage->save();

        return $articleImage;
    }

    public function delete($id)
    {
        $articleImage = ArticleImage::find($id);
        $articleId = $articleImage->article_id;

        $path = public_path() . '/images/articles/' . $articleImage->file_name;
        if (File::isFile($path)) {
            File::delete($path);
        }

        $deleted = $articleImage->delete();

        if ($deleted)
            $notification = 'Se ha eliminado la imagen seleccionada.';
        else
            $notification = 'No se ha podido eliminar la imagen seleccionada.';

        return redirect("articulos/$articleId/imagenes")->with('notification', $notification);
    }

    public function edit($id)
    {
        $image = ArticleImage::find($id);
        $article = $image->article;
        return view('client.articles.images.edit')->with(compact('image', 'article'));
    }

    public function update($id, Request $request)
    {
        $image = ArticleImage::find($id);
        $image->name = $request->input('name');
        $image->description = $request->input('description');
        $image->save();

        $notification = 'La datos de la imagen se han actualizado correctamente.';
        return back()->with('notification', $notification);
    }
}
