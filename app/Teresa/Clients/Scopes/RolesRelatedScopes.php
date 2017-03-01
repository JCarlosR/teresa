<?php

namespace App\Teresa\Clients\Scopes;

trait RolesRelatedScopes
{
    public function scopeClient($query)
    {
        return $query->where('role', 0);
    }
}