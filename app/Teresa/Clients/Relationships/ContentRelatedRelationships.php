<?php

namespace App\Teresa\Clients\Relationships;

trait ContentRelatedRelationships
{
    public function sections()
    {
        return $this->belongsToMany('App\Section', 'client_sections');
    }


    // fixed sections

    public function slides()
    {
        return $this->hasMany('App\Slide');
    }

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

    public function customers()
    {
        return $this->hasMany('App\Customer');
    }

    public function quotes()
    {
        return $this->hasMany('App\Quote');
    }


    // optional sections

    public function courses()
    {
        return $this->hasMany('App\Course');
    }

    public function brands()
    {
        return $this->hasMany('App\Brand');
    }

}