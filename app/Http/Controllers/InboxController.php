<?php

namespace App\Http\Controllers;

use App\InboxMessage;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class InboxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        // Projects associated with
        if (auth()->user()->is_admin)
            $this->user = User::find(session('client_id'));
        else
            $this->user = auth()->user();
    }

    public function index(Request $request)
    {
        $client = $this->user;

        $messagesQuery = InboxMessage::where('user_id', $client->id);

        $topic = $request->input('categoria');
        if ($topic && $topic != 'Todas') { // no filter for empty param
            $messagesQuery->where('topic', $topic);
        }

        $messages = $messagesQuery->get();

        return view('client.inbox.index')->with(compact('messages', 'topic'));
    }

    public function config()
    {
        $client = $this->user;
        return view('client.inbox.config', compact('client'));
    }
}
