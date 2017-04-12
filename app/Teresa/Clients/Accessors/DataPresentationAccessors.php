<?php

namespace App\Teresa\Clients\Accessors;

trait DataPresentationAccessors
{
    public function getShortNameAttribute()
    {
        $parts = explode(' ', $this->name);
        return $parts[0];
    }

    public function getScheduleStartFormatAttribute()
    {
        $parts = explode(':', $this->schedule_start);
        return $parts[0] . ':' . $parts[1];
    }

    public function getScheduleEndFormatAttribute()
    {
        $parts = explode(':', $this->schedule_end);
        return $parts[0] . ':' . $parts[1];
    }

    public function getPhotoRouteAttribute()
    {
        $path = 'images/users/';

        if ($this->photo)
            $file_name = $this->id . '.' . $this->photo;
        else $file_name = 'default.jpg';

        return $path . $file_name;
    }

    public function getWorkScheduleRouteAttribute()
    {
        if ($this->is_admin)
            return 'admin/cronograma';

        return '/cronograma';
    }

}