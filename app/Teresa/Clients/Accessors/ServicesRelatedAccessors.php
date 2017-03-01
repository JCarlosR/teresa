<?php namespace App\Teresa\Clients\Accessors;

use App\Service;

trait ServicesRelatedAccessors
{
    public function getServicesPercentAttribute()
    {
        $services = $this->services;

        $n = sizeof($services);
        if ($n == 0) return 0;

        $sum = 0;
        foreach ($services as $service) {
            $sum += $service->characters_percent;
        }

        $average = $sum / $n;
        return number_format((float) $average, 1, '.', '');
    }

    public function getServicesCountAttribute()
    {
        return Service::where('user_id', $this->id)->count();
    }

}