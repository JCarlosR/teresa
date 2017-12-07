<?php

namespace App\Teresa\Clients\Relationships;

use App\Article;
use App\ClientState;
use App\InboxTopic;
use App\PageDescription;

trait ContentRelatedRelationships
{
    public function state()
    {
        return $this->hasOne(ClientState::class);
    }

    public function sections()
    {
        return $this->belongsToMany('App\Section', 'client_sections')->orderBy('name');
    }


    // common sections

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

    public function inboxTopics()
    {
        return $this->hasMany(InboxTopic::class);
    }

    public function sliders()
    {
        return $this->hasMany('App\Slider');
    }

    public function slides()
    {
        return $this->hasMany('App\Slide');
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

    public function articles()
    {
        return $this->hasMany(Article::class);
    }


    // page descriptions with format (presentations)

    public function presentations()
    {
        return $this->hasMany(PageDescription::class);
    }

}