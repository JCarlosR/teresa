<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function getCharactersCountAttribute()
    {
        return strlen($this->question_1) +
            strlen($this->question_2) +
            strlen($this->question_3) +
            strlen($this->question_4);
    }

    public function getCharactersPercentAttribute()
    {
        $percent = $this->characters_count / 15; // / 1500 * 100
        return number_format((float) $percent, 2, '.', '');
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
