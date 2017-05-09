<?php

namespace App\Http\Controllers\Admin;

use App\WorkScheduleDetail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class WorkScheduleDetailController extends Controller
{
    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'month_offset' => 'integer|min:0|max:11'
        ]);

        $validator->after(function ($validator) use ($request) {
            $exists = WorkScheduleDetail::where('month_offset', $request->input('month_offset'))
                ->where('type', $request->input('activity_type'))->exists();

            if ($exists) {
                $validator->errors()->add('activity_type', 'Ya se ha registrado esta actividad en el mes seleccionado.');
            }
        });

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $detail = new WorkScheduleDetail();
        $detail->work_schedule_id = $id;
        $detail->type = $request->input('activity_type');
        $detail->month_offset = $request->input('month_offset');
        $detail->state = 0; // pending (can be cancelled or done in the future)
        $detail->save();

        return back()->with('notification', 'Actividad registrada satisfactoriamente.');
    }

    public function update($detail_id, Request $request)
    {
        $detail = WorkScheduleDetail::find($detail_id);
        $detail->state = $request->input('state');
        $detail->save();

        return back()->with('notification', 'Se ha cambiado el estado de la actividad seleccionada.');
    }

    public function updateByActivityAndOffset($id, Request $request)
    {
        $rules = [
            'state' => 'required',
            'month_offset' => 'required|integer|min:0|max:11',
            'type' => 'required'
        ];
        $this->validate($request, $rules);

        $detail = WorkScheduleDetail::where('type', $request->input('type'))
            ->where('month_offset', $request->input('month_offset'))->first();

        if ($detail) {
            if ($request->input('state') == -2) {
                $detail->delete();
                $notification = 'Se ha eliminado la actividad seleccionada.';
            } else {
                $detail->state = $request->input('state');
                $detail->save();
                $notification = 'Se ha cambiado el estado de la actividad seleccionada.';
            }
        } else {
            $detail = new WorkScheduleDetail();
            $detail->work_schedule_id = $id;
            $detail->type = $request->input('type');
            $detail->month_offset = $request->input('month_offset');
            $detail->state = $request->input('state') ?: 0; // when state is sent as 0, it is received as null, so we fix doing it
            $detail->save();

            $notification = 'Se ha registrado una nueva actividad.';
        }

        return back()->with('notification', $notification);
    }
}
