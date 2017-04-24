<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
{

    // relationships

    public function service()
    {
        return $this->belongsTo('App\Service');
    }

}
