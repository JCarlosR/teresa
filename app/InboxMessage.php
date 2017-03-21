<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InboxMessage extends Model
{


    // accessors

    public function getShortContentAttribute()
    {
        return mb_strimwidth($this->content, 0, 18, "...");
    }
}
