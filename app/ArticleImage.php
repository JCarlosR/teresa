<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{

    // relationships

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
