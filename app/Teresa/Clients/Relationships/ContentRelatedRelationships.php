<?php

namespace App\Teresa\Clients\Relationships;

trait ContentRelatedRelationships
{

    public function about_us()
    {
        return $this->hasOne('App\AboutUs');
    }

    public function services()
    {
        return $this->hasMany('App\Service');
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

}