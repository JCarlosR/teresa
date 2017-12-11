<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // accessors
    public function getCharactersCountAttribute()
    {
        return strlen(strip_tags($this->idea)) +
            strlen(strip_tags($this->idea_development));
    }

    public function getCharactersPercentAttribute()
    {
        $percent = $this->characters_count / 10; // / 1000 * 100
        if ($percent > 100) $percent = 100;
        return number_format((float) $percent, 2, '.', '');
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
