<?php

namespace App\Teresa\Clients\Accessors;

trait DataPresentationAccessors
{
    public function getShortNameAttribute()
    {
        $parts = explode(' ', $this->name);
        return $parts[0];
    }

    public function getCountryCodeAttribute()
    {
        return $this->country_code_alpha . ';' . $this->country_code_number;
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

    public function getPhonesWithLinkAttribute()
    {
        $phones = explode("\n", $this->phones);
        $result_html = '';
        foreach ($phones as $phone) {
            $result_html .= "| <a href='tel:$phone'>$phone</a> ";
        }
        return $result_html;
    }
}