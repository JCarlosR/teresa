<?php

namespace App\Http\Controllers;

use App\InboxMessage;
use App\Teresa\Admin\AccessClientAsAdmin;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class InboxController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $client = $this->client();

        $messagesQuery = InboxMessage::where('user_id', $client->id);

        $topic = $request->input('categoria');
        if ($topic && $topic != 'Todas') { // no filter for empty param
            $messagesQuery->where('topic', $topic);
        }

        $messages = $messagesQuery->orderBy('id', 'desc')->paginate(10);

        return view('client.inbox.index')->with(compact('messages', 'topic'));
    }

    public function show($id)
    {
        $client = $this->client();

        $message = InboxMessage::find($id);
        if ($message->user_id != $client->id)
            return redirect('/inbox');

        $topic = '';
        return view('client.inbox.show')->with(compact('message', 'topic'));
    }

    public function config()
    {
        $client = $this->client();
        return view('client.inbox.config', compact('client'));
    }
}
