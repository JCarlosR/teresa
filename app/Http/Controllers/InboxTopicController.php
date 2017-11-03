<?php

namespace App\Http\Controllers;

use App\InboxTopic;
use Illuminate\Http\Request;

use App\Http\Requests;

class InboxTopicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $topics = InboxTopic::where('user_id', auth()->user()->id)->pluck('name');
        return view('client.inbox.topics.index')->with(compact('topics'));
    }
}
