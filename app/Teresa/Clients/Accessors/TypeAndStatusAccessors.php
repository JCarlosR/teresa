<?php

namespace App\Teresa\Clients\Accessors;

trait TypeAndStatusAccessors
{
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
}