<?php

namespace App\Http\Controllers\Admin;

use App\PaymentSchedule;
use App\PaymentScheduleDetail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
        $schedules = PaymentSchedule::where('user_id', session('client_id'))->get();
        return view('admin.payments.index')->with(compact('schedules'));
    }

    public function create()
    {

        return view('admin.payments.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'starter_date' => 'required',
            'coin_type' => 'in:USD,PEN',
            'total_amount' => 'required|numeric|min:1000',
            'income_tax' => 'required|max:1|numeric',
            'modality' => 'in:Q,M|required',
            'quotas' => 'min:2|numeric'
        ];
        $messages = [
            'starter_date.required' => 'Es necesario ingresar una fecha de inicio.',
            'total_amount.required' => 'Es necesario ingresar el valor total bruto.',
            'total_amount.min' => 'Ha ingresado un valor muy pequeño para el monto total.',
            'income_tax.required' => 'Es necesario ingresar un valor como impuesto a la renta.',
            'income_tax.max' => 'El impuesto a la renta se debe ingresar como un porcentaje en tanto por 1.',
            'modality.required' => 'Es necesario que seleccione una modalidad de pago.',
            'modality.in' => 'Ha ingresado una modalidad no permitida.',
            'quotas.min' => 'El número de cuotas debe ser al menos 3.'
        ];
        $this->validate($request, $rules, $messages);

        $headerData = $request->only('starter_date', 'coin_type', 'total_amount', 'income_tax', 'modality', 'quotas');
        $headerData['user_id'] = session('client_id');
        $paymentSchedule = PaymentSchedule::create(
            $headerData
        );

        if ($paymentSchedule->modality == 'Q')
            $daysInterval = 90;
        else // M
            $daysInterval = 30;

        $amountPerQuota = $paymentSchedule->total_amount / $paymentSchedule->quotas;
        $amountNet = $amountPerQuota * (1-$paymentSchedule->income_tax);

        for ($i=0; $i<$paymentSchedule->quotas; ++$i) {
            PaymentScheduleDetail::create([
                'payment_schedule_id' => $paymentSchedule->id,
                'emission_date' => $paymentSchedule->starter_date->addDays($daysInterval*$i),
                'total' => $amountPerQuota,
                'net' => $amountNet
            ]);
        }

        return redirect('admin/pagos/'.$paymentSchedule->id);
    }

    public function edit($id)
    {
        $paymentSchedule = PaymentSchedule::findOrFail($id);
        return view('admin.payments.edit')->with(compact('paymentSchedule'));
    }

    public function detailPayment(Request $request)
    {
        $paymentScheduleDetail = PaymentScheduleDetail::findOrFail($request->input('detail_id'));
        $paymentScheduleDetail->payment_date = $request->input('payment_date');
        $paymentScheduleDetail->save();

        return back()->with('notification', 'Fecha de pago asignada correctamente.');
    }
}
