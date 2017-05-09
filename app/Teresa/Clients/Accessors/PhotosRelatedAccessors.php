<?php namespace App\Teresa\Clients\Accessors;

trait PhotosRelatedAccessors
{
    public function getPhotoRouteAttribute()
    {
        $path = 'images/users/';

        if ($this->photo)
            $file_name = $this->id . '.' . $this->photo;
        else $file_name = 'default.jpg';

        return url($path . $file_name);
    }
}