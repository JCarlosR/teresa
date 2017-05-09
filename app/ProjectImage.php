<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    // accessors

    public function getFullPathAttribute()
    {
        return url('/images/projects/' . $this->file_name);
    }


    // relationships

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
