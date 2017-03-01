<?php

namespace App\Teresa\Clients\Relationships;

trait ContentRelatedRelationships
{

    public function services()
    {
        return $this->hasMany('App\Service');
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

}