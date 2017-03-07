<?php

namespace App\Http\Controllers\External;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {

        Mail::send('emails.external.contact', $request->all(), function ($m) {
            $m->to('juancagb.17@gmail.com', 'Juan Ramos')->subject('Han usado el formulario de contacto!');
        });

    }

}
