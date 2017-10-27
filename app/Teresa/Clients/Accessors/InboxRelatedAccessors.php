<?php namespace App\Teresa\Clients\Accessors;

use App\InboxMessage;

trait InboxRelatedAccessors
{
    public function inbox_messages()
    {
        return $this->hasMany(InboxMessage::class);
    }

}