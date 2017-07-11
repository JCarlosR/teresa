<?php namespace App\Teresa\Clients\Accessors;

use App\Service;

trait PagePresentationAccessors
{
    public function presentation($pageName)
    {
        $presentation = $this->presentations()->wherePage($pageName)->first();
        if ($presentation)
            return $presentation->description;
        // else
        return '';
    }

}