<?php namespace App\Teresa\Clients\Accessors;

use App\Service;

trait SectionsRelatedMethods
{

    public function hasSection($section)
    {
        return $this->sections()->where('name', $section)->exists();
    }

}