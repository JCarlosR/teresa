<?php namespace App\Teresa\Clients\Accessors;

use App\SiteMapLink;

trait SiteMapRelatedAccessors
{
    public function siteMapLinks()
    {
        return $this->hasMany(SiteMapLink::class);
    }

}