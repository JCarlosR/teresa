<?php

namespace App\Http\Controllers;

use App\InboxMessage;
use App\Teresa\Admin\AccessClientAsAdmin;
use Illuminate\Http\Request;

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

        $topic = $request->input('categoria');
        if ($topic && $topic != 'Todos') { // no filter for empty param
            $client->inbox_messages()->where('topic', $topic);
        }

        $categories = $client->inbox_messages()->distinct()->pluck('topic');
        // dd($categories);

        $messages = $client->inbox_messages()
            ->orderBy('read')
            ->orderBy('id', 'desc')->paginate(10);

        $deleted_count = $client->inbox_messages()
            ->onlyTrashed()->count();

        $pending_count = $client->inbox_messages()
            ->where('read', false)->count();

        return view('client.inbox.index')->with(compact(
            'categories', 'messages', 'topic',
            'deleted_count', 'pending_count'
        ));
    }

    public function show($id)
    {
        $client = $this->client();
        $categories = $client->inbox_messages()->distinct()->pluck('topic');

        $message = InboxMessage::find($id);
        if ($message->user_id != $client->id)
            return redirect('/inbox');

        if ($message->read == false) {
            $message->read = true;
            $message->save();
        }

        $topic = '';
        $deleted_count = $client->inbox_messages()
            ->onlyTrashed()->count();

        $pending_count = $client->inbox_messages()
            ->where('read', false)->count();

        return view('client.inbox.show')->with(compact(
            'categories', 'message', 'topic',
            'deleted_count', 'pending_count'
        ));
    }

}
