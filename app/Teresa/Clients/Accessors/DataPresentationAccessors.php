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

    public function getWorkScheduleRouteAttribute()
    {
        if ($this->is_admin)
            return 'admin/cronograma';

        return '/cronograma';
    }

}