<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_uses';

    protected $fillable = ['user_id'];

    public function images()
    {
        return $this->hasMany('App\AboutUsImage');
    }
}
