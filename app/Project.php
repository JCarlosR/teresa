<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
