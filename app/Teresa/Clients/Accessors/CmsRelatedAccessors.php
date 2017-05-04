<?php namespace App\Teresa\Clients\Accessors;

use App\Service;

trait CmsRelatedAccessors
{

    public function getLinkTo($path)
    {
        return url('/ver/' . $this->id . $path);
    }

}