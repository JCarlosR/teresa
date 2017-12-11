<?php namespace App\Teresa\Clients\Accessors;

use App\Service;

trait ServicesRelatedAccessors
{
    public function getServicesPercentAttribute()
    {
        $services = $this->services()->get([
            'id',
            'question_1', 'question_2', 'question_3', 'question_4'
        ]);

        $n = sizeof($services);
        if ($n == 0) return 0;

        $sum = 0;
        foreach ($services as $service) {
            $sum += $service->characters_percent;
        }

        $average = $sum / $n;
        return number_format((float) $average, 1, '.', '');
    }

    public function getServicesStatusAttribute()
    {
        if ($this->services_percent < 50)
            return 'danger';
        else if ($this->services_percent < 90)
            return 'warning';
        else
            return 'success';
    }

    public function getServicesCountAttribute()
    {
        return Service::where('user_id', $this->id)->count();
    }

}