<?php

namespace App\Teresa\Clients\Accessors;

use App\User;

trait RolesRelatedAccessors
{

    public function getIsAdminAttribute()
    {
        return $this->role == 1;
    }

    public function getIsSuperClientAttribute()
    {   // if have children
        return User::where('parent_id', $this->id)->exists();
    }

    public function getIsClientAttribute()
    {
        return $this->role == 0;
    }

    public function getRootRouteAttribute()
    {
        if ($this->is_admin)
            return $this->adminPath;
        if ($this->is_super_client)
            return $this->superClientPath;
        return $this->clientPath;
    }

    public function getServicesRouteAttribute()
    {
        if ($this->is_admin)
            return '/admin/servicios';
        return '/servicios';
    }

    public function getAdminPrefixRouteAttribute()
    {
        if ($this->is_admin)
            return '/admin';
        return '';
    }
}