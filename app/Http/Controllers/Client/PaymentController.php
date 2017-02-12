<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\PaymentSchedule;
use Illuminate\Http\Request;

use App\Http\Requests;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $schedules = PaymentSchedule::where('user_id', auth()->user()->id)->get();
        return view('client.payments.index')->with(compact('schedules'));
    }

    public function show($id)
    {
        $paymentSchedule = PaymentSchedule::findOrFail($id);
        return view('client.payments.show')->with(compact('paymentSchedule'));
    }
}
