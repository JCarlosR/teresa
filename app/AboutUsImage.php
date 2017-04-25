<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUsImage extends Model
{

    // relationships

    public function about_us()
    {
        return $this->belongsTo('App\AboutUs');
    }

}
