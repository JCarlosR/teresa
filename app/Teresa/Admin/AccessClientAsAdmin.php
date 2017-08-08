<?php namespace App\Teresa\Admin;

use App\User;

trait AccessClientAsAdmin
{
    private $user;

    public function client()
    {
        if (! isset($this->user)) {
            // Selected client
            if (auth()->user()->is_admin || auth()->user()->is_super_client)
                $this->user = User::find(session('client_id'));
            else // or authenticated client
                $this->user = auth()->user();
        }

        return $this->user;
    }
}