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

    public function images()
    {
        return $this->hasMany('App\ProjectImage');
    }

    public function getHasPhotosAttribute()
    {
        return ProjectImage::where('project_id', $this->id)->count();
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
            case 0:
                $characters = strlen(strip_tags($this->question_0));
                break;
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

        if ($i==0)
        {
            // question 0: title
            if ($characters >= 55 && $characters <= 70)
                return 'success';
            else if ($characters >= 50 && $characters <= 72)
                return 'warning';
            else
                return 'danger';
        } else {
            // other questions
            if ($characters >= 500)
                return 'success';
            else if ($characters >= 300)
                return 'warning';
            else
                return 'danger';
        }

    }
}
