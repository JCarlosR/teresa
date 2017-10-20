<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public function getImageUrlAttribute()
    {
        return '/images/slides/'.$this->image;
    }
}
