<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];


    // relationships

    public function projects()
    {
        return $this->belongsToMany('App\Project')->withTimestamps();
    }


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
            case 4:
                $characters = strlen(strip_tags($this->question_4));
                break;
            case 5:
                $characters = strlen(strip_tags($this->question_5));
                break;
        }

        if ($characters >= 300)
            return 'success';
        else if ($characters >= 200)
            return 'warning';
        else
            return 'danger';
    }
}
