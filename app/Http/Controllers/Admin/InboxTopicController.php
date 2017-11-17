<?php

namespace App\Http\Controllers\Admin;

use App\InboxTopic;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InboxTopicController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $client = $this->client();
        $topics = InboxTopic::where('user_id', $client->id)->pluck('name');
        return view('admin.inbox.topics.index')->with(compact('topics'));
    }

    public function store(Request $request)
    {
        $client = $this->client();
        // dd($request->all());
        $topics = $request->input('topics');
        // delete previous topics
        InboxTopic::where('user_id', $client->id)->delete();
        // and create the new ones
        foreach ($topics as $topic) {
            if ($topic) {
                $inboxTopic = new InboxTopic();
                $inboxTopic->user_id = $client->id;
                $inboxTopic->name = $topic;
                $inboxTopic->save();
            }
        }

        $notification = 'Los asuntos del formulario de contacto se han actualizado exitosamente!';
        return back()->with(compact('notification'));
    }

}
