<?php

use App\User;

if (! function_exists('client')) {
    function client()
    {
        return User::find(session('client_id'));
    }
}