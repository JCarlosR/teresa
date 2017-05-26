<?php namespace App\Teresa\Clients\Accessors;

use App\Service;

trait CmsRelatedAccessors
{

    public function getLinkTo($path)
    {
        if (strpos(url(), 'teresa') !== false) {
            return url($path);
        }

        return url('/ver/' . $this->id . $path);
    }

}