<?php

namespace App\Teresa\Clients\Accessors;

trait RolesRelatedAccessors
{

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

    public function getServicesRouteAttribute()
    {
        if ($this->is_admin)
            return '/admin/servicios';
        return '/servicios';
    }

}