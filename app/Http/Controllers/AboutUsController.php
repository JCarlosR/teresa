<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AboutUsController extends Controller
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

    public function show()
    {
        $about_us = AboutUs::firstOrNew([
            'user_id' => $this->user->id
        ]);

        return view('client.about-us.show')->with(compact('about_us'));
    }

    public function edit()
    {
        $about_us = AboutUs::firstOrNew([
            'user_id' => $this->user->id
        ]);

        return view('client.about-us.edit')->with(compact('about_us'));
    }

    public function update(Request $request)
    {
        $about_us = AboutUs::firstOrNew([
            'user_id' => $this->user->id
        ]);

        $about_us->question_1 = $request->input('question_1');
        $about_us->question_2 = $request->input('question_2');
        $about_us->question_3 = $request->input('question_3');
        $about_us->question_4 = $request->input('question_4');
        $about_us->question_5 = $request->input('question_5');
        $about_us->question_6 = $request->input('question_6');

        $about_us->save();

        session()->flash('notification', 'Se han guardado exitosamente los datos sobre la sección nosotros.');

        // same route for admin and client
        return redirect('/nosotros');
    }
}
