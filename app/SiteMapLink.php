<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteMapLink extends Model
{
    public function children()
    {
        return $this->hasMany(SiteMapLink::class)->orderBy('id');
    }

    public function absoluteUrl($domain)
    {
        return $domain . '/' . ltrim($this->url, '/');
    }
}
