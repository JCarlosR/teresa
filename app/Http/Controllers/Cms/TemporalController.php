<?php

namespace App\Http\Controllers\Cms;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TemporalController extends Controller
{
    public function tawaPe()
    {
        return $this->index(User::find(35));
    }

    public function tawaCl()
    {
        return $this->index(User::find(36));
    }

    public function romPe()
    {
        return $this->index(User::find(28));
    }

    public function samuel()
    {
        return $this->index(User::find(23));
    }

    public function flat()
    {
        return $this->index(User::find(41));
    }

    public function index(User $client)
    {
        $topics = $client->inboxTopics()->pluck('name');
        return view('cms.temporal')->with(compact('client', 'topics'));
    }
}
