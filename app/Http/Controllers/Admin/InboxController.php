<?php

namespace App\Http\Controllers\Admin;

use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InboxController extends Controller
{
    use AccessClientAsAdmin;

    public function config()
    {
        $client = $this->client();
        return view('client.inbox.config', compact('client'));
    }
}
