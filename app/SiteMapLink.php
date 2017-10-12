<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteMapLink extends Model
{
    public function children()
    {
        return $this->hasMany(SiteMapLink::class);
    }
}
