<?php

namespace App\Http\Controllers;

use App\Quote;
use App\Teresa\Admin\AccessClientAsAdmin;
use File;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    use AccessClientAsAdmin;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $quotes = $this->client()->quotes;
        $description = $this->client()->quotes_description;
        return view('client.quotes.index')->with(compact('quotes', 'description'));
    }

    public function create()
    {
        return view('client.quotes.create');
    }

    public function store(Request $request)
    {
        $quote = new Quote();
        $quote->user_id = $this->client()->id;
        $quote->content = $request->input('content');

        $file = $request->file('image');
        $path = public_path() . '/images/quotes';
        $fileName = uniqid() . $file->getClientOriginalName();

        $file->move($path, $fileName);

        $quote->image = $fileName;
        $quote->save();

        $notification = 'Cita registrada correctamente.';
        return redirect('citas')->with(compact('notification'));
    }

    public function edit($id)
    {
        $quote = Quote::find($id);
        return view('client.quotes.edit')->with(compact('quote'));
    }

    public function update($id, Request $request)
    {
        $quote = Quote::find($id);
        $quote->content = $request->input('content');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = public_path() . '/images/quotes';
            $fileName = uniqid() . $file->getClientOriginalName();

            $moved = $file->move($path, $fileName);

            if ($moved) {
                // remove previous image
                $oldPath = public_path() . '/images/quotes/' . $quote->image;
                if(File::isFile($oldPath)){
                    File::delete($oldPath);
                }
            }

            $quote->image = $fileName;
        }

        $quote->save();

        $notification = 'Cita modificada exitosamente.';
        return redirect('citas')->with(compact('notification'));
    }

    public function delete($id)
    {
        $quote = Quote::find($id);
        $quote->delete();

        return back();
    }
}
