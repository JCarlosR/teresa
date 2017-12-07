<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientState extends Model
{
    protected $fillable = [
        'user_id',
        'sitemap', 'website', 'google_analytics',
        'social_media', 'professional_media', 'broadcasting'
    ];
}
