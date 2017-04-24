<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{

    // relationships

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
