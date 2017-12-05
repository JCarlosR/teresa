<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    // accessors

    public function getCharactersCountAttribute()
    {
        return strlen(strip_tags($this->question_1)) +
            strlen(strip_tags($this->question_2)) +
            strlen(strip_tags($this->question_3));
    }

    public function getCharactersPercentAttribute()
    {
        $percent = $this->characters_count / 15; // / 1500 * 100
        if ($percent > 100) $percent = 100;
        return number_format((float) $percent, 2, '.', '');
    }

    public function getStatusColorAttribute()
    {
        $percent = $this->characters_percent;
        if ($percent < 50)
            return 'red';
        // else
        if ($percent < 100)
            return 'yellow';
        // else
        return 'green';
    }


    // methods

    public function questionStatus($i) {
        $characters = 0;
        switch ($i) {
            case 1:
                $characters = strlen(strip_tags($this->question_1));
                break;
            case 2:
                $characters = strlen(strip_tags($this->question_2));
                break;
            case 3:
                $characters = strlen(strip_tags($this->question_3));
                break;
        }

        // other questions
        if ($characters >= 500)
            return 'success';
        else if ($characters >= 300)
            return 'warning';
        else
            return 'danger';

    }

    public function absoluteUrl($domain)
    {
        return $domain . '/marcas/' . ltrim(str_slug($this->name), '/');
    }
}
