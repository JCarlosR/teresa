<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * @property boolean $is_admin
     * @property boolean $is_client
     */

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // where to redirect users after login / registration.
    protected $clientPath = '/dashboard';
    protected $adminPath = '/admin';

    // accessors

    public function getShortNameAttribute()
    {
        $parts = explode(' ', $this->name);
        return $parts[0];
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

    public function getPhotoRouteAttribute()
    {
        $path = 'images/users/';

        if ($this->photo)
            $file_name = $this->id . '.' . $this->photo;
        else $file_name = 'default.jpg';

        return $path . $file_name;
    }

    public function getIsClientAttribute()
    {
        return $this->role == 0;
    }
    public function getIsAdminAttribute()
    {
        return $this->role == 1;
    }

    public function getRootRouteAttribute()
    {
        if ($this->is_admin)
            return $this->adminPath;
        return $this->clientPath;
    }

    public function getClientTypeAttribute()
    {
        if ($this->client_type_id) {
            switch ($this->client_type_id) {
                case 1: return 'architect';
            }
        }

        return 'sps';
    }

    public function getStarStateAttribute()
    {
        if ($this->starred) return 'on';
        return 'off';
    }

    public function getInverseStarStateAttribute()
    {
        if ($this->starred) return 'off';
        return 'on';
    }

    public function getProjectsPercentAttribute()
    {
        $projects = $this->projects;

        $sum = 0;
        foreach ($projects as $project) {
            $sum += $project->characters_percent;
        }

        $average = $sum / sizeof($projects);
        return number_format((float) $average, 1, '.', '');
    }
    public function getServicesPercentAttribute()
    {
        $services = $this->services;

        $sum = 0;
        foreach ($services as $service) {
            $sum += $service->characters_percent;
        }

        $average = $sum / sizeof($services);
        return number_format((float) $average, 1, '.', '');
    }

    // relationships

    public function services()
    {
        return $this->hasMany('App\Service');
    }
    public function projects()
    {
        return $this->hasMany('App\Project');
    }


    // scopes

    public function scopeClient($query)
    {
        return $query->where('role', 0);
    }
}
