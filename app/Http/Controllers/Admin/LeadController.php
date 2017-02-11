<?php

namespace App\Http\Controllers\Admin;

use App\PaymentSchedule;
use App\PaymentScheduleDetail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LeadController extends Controller
{
    public function index()
    {
        $schedules = PaymentSchedule::where('user_id', session('client_id'))->get();
        return view('admin.leads.index')->with(compact('schedules'));
    }

    public function edit($id)
    {
        $paymentSchedule = PaymentSchedule::findOrFail($id);
        $details = $paymentSchedule->details;
        return view('admin.leads.edit')->with(compact('paymentSchedule', 'details'));
    }

    public function update(Request $request)
    {
        $category = $request->input('category');
        $details_id = $request->input('details');
        $values = $request->input('leads');

        for ($i=0; $i<sizeof($details_id); $i++) {
            $detail = PaymentScheduleDetail::findOrFail($details_id[$i]);
            $detail[$category] = $values[$i];
            $detail->save();
        }

        return back()->with('notification', 'Se han actualizado correctamente los leads de la fila indicada.');
    }
}
