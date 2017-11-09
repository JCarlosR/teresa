<?php

namespace App\Http\Controllers\Cms;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TemporalController extends Controller
{
    public function samuel()
    {
        return $this->index(User::find(23));
    }

    public function index(User $client)
    {
        $topics = $client->inboxTopics()->pluck('name');
        return view('cms.temporal')->with(compact('client', 'topics'));
    }
}
