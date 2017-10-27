<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InboxMessage extends Model
{
    use SoftDeletes;

    // accessors

    public function getShortContentAttribute()
    {
        return mb_strimwidth($this->content, 0, 18, "...");
    }
}
