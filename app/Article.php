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

    public function getUrlAttribute()
    {
        // temporary FIXED url
        return str_slug($this->title);
    }

    // relationships
    public function images()
    {
        return $this->hasMany(ArticleImage::class);
    }

    // methods
    public function absoluteUrl($domain)
    {
        return $domain . '/blog/' . ltrim($this->url, '/');
    }
}
