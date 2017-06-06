<?php namespace App\Teresa\Clients\Accessors;

use App\Service;

trait CmsRelatedAccessors
{

    public function getLinkTo($path)
    {
        // !==false is not the same that ===true

        // if contains 'teresa' or contains 'localhost'
        if (strpos(url('/'), 'teresa') !== false || strpos(url('/'), 'localhost') !== false) {
            return url('/ver/' . $this->id . $path);
        }

        // for specific client domains
        return url($path);
    }

}