<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // accessors
    public function getCharactersCountAttribute()
    {
        return strlen(strip_tags($this->context)) +
            strlen(strip_tags($this->idea_development));
    }

    // relationships
    public function images()
    {
        return $this->hasMany(ArticleImage::class);
    }
}
