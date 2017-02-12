<?php

namespace App\Http\Controllers\Client;

use App\PaymentSchedule;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LeadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $schedules = PaymentSchedule::where('user_id', auth()->user()->id)->get();
        return view('client.leads.index')->with(compact('schedules'));
    }

    public function show($id)
    {
        $paymentSchedule = PaymentSchedule::findOrFail($id);
        $details = $paymentSchedule->details;
        return view('client.leads.show')->with(compact('paymentSchedule', 'details'));
    }
}
