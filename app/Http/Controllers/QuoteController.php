<?php

namespace App\Http\Controllers;

use App\Quote;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class QuoteController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->middleware('auth');

        // Projects associated with
        if (auth()->user()->is_admin)
            $this->user = User::find(session('client_id'));
        else
            $this->user = auth()->user();
    }

    public function index()
    {
        $quotes = Quote::all();
        return view('client.quotes.index')->with(compact('quotes'));
    }

    public function store(Request $request)
    {
        $quote = new Quote();
        $quote->content = $request->input('content');
        $quote->author = $request->input('author');
        $quote->user_id = $this->user->id;
        $quote->save();

        return back();
    }

    public function update($id, Request $request)
    {
        $quote = Quote::find($id);
        $quote->content = $request->input('content');
        $quote->author = $request->input('author');
        $quote->save();

        return back();
    }

    public function delete($id)
    {
        $quote = Quote::find($id);
        $quote->delete();

        return back();
    }
}
