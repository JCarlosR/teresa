<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkSchedule extends Model
{
    protected $dates = ['start_date'];

    public function details()
    {
        return $this->hasMany('App\WorkScheduleDetail')->orderBy('month_offset', 'asc');
    }

    public function getCompletedStringAttribute()
    {
        $completed = 0;
        $total = 0;
        foreach ($this->details as $detail) {
            ++$total;
            if ($completed == +1)
                ++$completed;
        }

        return "$completed / $total";
    }
}
