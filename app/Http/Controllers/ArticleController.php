<?php

namespace App\Http\Controllers;

use App\Article;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $articles = $this->client()->articles;
        return view('client.articles.index')->with(compact('articles'));
    }

    public function show($id)
    {
        $client = $this->client();
        $article = Article::findOrFail($id);

        // Check if the project really belongs to the user
        if ($article->user_id !== $client->id)
            return redirect('/articulos');

        return view('client.articles.show')->with(compact('client', 'article'));
    }

    public function create()
    {
        $client = $this->client();
        return view('client.articles.create')->with(compact('client'));
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|min:5',
            'idea' => 'min:5'
        ];
        $messages = [
            'title.required' => 'Debes ingresar un título para el artículo.',
            'title.min' => 'El título debe presentar al menos 5 caracteres.',
            'idea.min' => 'La idea es demasiado corta.'
        ];
        $this->validate($request, $rules, $messages);

        $article = new Article();
        $article->user_id = $this->client()->id;

        $article->title = $request->get('title');
        $article->idea = $request->get('idea');
        $article->objective = $request->get('objective');
        $article->context = $request->get('context');
        $article->idea_development = $request->get('idea_development');

        // initial Search Results Page values
        $article->meta_title = $article->title;
        $article->meta_description = $article->idea;

        $article->save();

        $notification = 'El artículo se ha registrado correctamente!';
        session()->flash('notification', $notification);

        return redirect('/articulos');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        // Check if it really belongs to the user
        if ($article->user_id !== $this->client()->id)
            return redirect('/articulos');

        $client = $this->client();
        return view('client.articles.edit')->with(compact('client', 'article'));
    }

    public function update($id, Request $request)
    {
        $rules = [
            'title' => 'required|min:5',
            'idea' => 'min:5'
        ];
        $messages = [
            'title.required' => 'Debes ingresar un título para el artículo.',
            'title.min' => 'El título debe presentar al menos 5 caracteres.',
            'idea.min' => 'La idea es demasiado corta.'
        ];
        $this->validate($request, $rules, $messages);

        $article = Article::findOrFail($id);
        $article->user_id = $this->client()->id;

        $article->title = $request->get('title');
        $article->idea = $request->get('idea');
        $article->objective = $request->get('objective');
        $article->context = $request->get('context');
        $article->idea_development = $request->get('idea_development');

        if (auth()->user()->is_admin) {
            $article->meta_title = $request->get('meta_title');
            $article->meta_description = $request->get('meta_description');
        }

        $article->save();

        $notification = 'El artículo se ha modificado correctamente!';
        session()->flash('notification', $notification);

        return redirect('/articulos');
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        $notification = 'El artículo seleccionado se ha eliminado correctamente.';
        return back()->with(compact('notification'));
    }
}
