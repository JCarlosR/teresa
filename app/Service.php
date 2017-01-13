<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];


    // accessors

    public function getCharactersCountAttribute()
    {
        return strlen(strip_tags($this->question_1)) +
            strlen(strip_tags($this->question_2)) +
            strlen(strip_tags($this->question_3)) +
            strlen(strip_tags($this->question_4));
    }

    public function getCharactersPercentAttribute()
    {
        $percent = $this->characters_count / 15; // / 1500 * 100
        return number_format((float) $percent, 2, '.', '');
    }


    // relationships

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
