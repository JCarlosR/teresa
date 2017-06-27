<?php namespace App\Teresa\Clients\Accessors;

use App\Service;

trait CmsRelatedAccessors
{

    public function getLinkTo($path)
    {
        // !==false is not the same that ===true

        // if contains 'teresa' or contains 'localhost' (or the old 'teresa')
        if (strpos(url('/'), 'theressa') !== false
            || strpos(url('/'), 'localhost') !== false
            || strpos(url('/'), 'teresa') !== false) {
            return url('/ver/' . $this->id . $path);
        }

        // for specific client domains
        return url($path);
    }

}