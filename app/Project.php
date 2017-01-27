<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];


    // relationships

    public function services()
    {
        return $this->belongsToMany('App\Service')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function architect_project()
    {
        return $this->hasOne('App\ArchitectProject');
    }


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
        return number_format((float) $percent, 2, '.', '');
    }

    public function getStatusColorAttribute()
    {
        $percent = $this->characters_percent;
        if ($percent <= 25)
            return 'red';
        // else
        if ($percent <= 75)
            return 'yellow';
        // else
        return 'green';
    }
}
