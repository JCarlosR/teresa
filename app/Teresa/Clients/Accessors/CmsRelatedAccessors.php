<?php namespace App\Teresa\Clients\Accessors;

use App\Service;

trait CmsRelatedAccessors
{

    public function getLinkTo($path)
    {
        if (strpos(url('/'), 'teresa') !== false) { // it is not the same that === true :D
            return url('/ver/' . $this->id . $path);
        }

        return url($path);
    }

}