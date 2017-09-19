<?php

namespace App\Http\Controllers\Cms;

use App\Article;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function show($id, $article)
    {
        $me = User::find($id);
        $article = Article::find($article);
        $theme = 'default';
        return view("themes.$theme.articles.show")->with(compact('me', 'article'));
    }
}
