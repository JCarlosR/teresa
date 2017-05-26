<?php namespace App\Teresa\Clients\Accessors;

use App\Service;

trait CmsRelatedAccessors
{

    public function getLinkTo($path)
    {
        if (strpos(url('/'), 'teresa') === true) {
            return url('/ver/' . $this->id . $path);
        }

        return url($path);
    }

}