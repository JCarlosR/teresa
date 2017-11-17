<?php

namespace App\Http\Controllers;

use App\InboxTopic;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;

class InboxTopicController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $topics = InboxTopic::where('user_id', auth()->user()->id)->pluck('name');
        return view('client.inbox.topics.index')->with(compact('topics'));
    }

    public function chartData()
    {
        $topics = InboxTopic::where('user_id', $this->client()->id)->pluck('name');
        $data = [];
        foreach ($topics as $topic) {
            $item = [];
            $item['label'] = $topic;
            $count = $this->client()->inbox_messages->where('topic', $topic)->count();
            $item['data'] = $count;
            $data[] = $item;
        }
        return $data;
    }
}
