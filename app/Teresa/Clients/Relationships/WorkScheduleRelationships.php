<?php

namespace App\Teresa\Clients\Relationships;

trait WorkScheduleRelationships
{

    public function work_schedules()
    {
        return $this->hasMany('App\WorkSchedule');
    }

}