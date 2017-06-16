<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
{

    // accessors

    public function getFullPathAttribute()
    {
        return url('/images/services/' . $this->file_name);
    }

    // relationships

    public function service()
    {
        return $this->belongsTo('App\Service');
    }

}
