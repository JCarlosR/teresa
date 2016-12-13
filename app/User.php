<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getShortNameAttribute()
    {
        $parts = explode(' ', $this->name);
        return $parts[0];
    }

    public function getStartOfServiceAttribute()
    {
        return $this->created_at->toDateString();
    }

    public function services()
    {
        return $this->hasMany('App\Service');
    }
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
