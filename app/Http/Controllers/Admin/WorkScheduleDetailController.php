<?php

namespace App\Http\Controllers\Admin;

use App\WorkScheduleDetail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkScheduleDetailController extends Controller
{
    public function store(Request $request, $id)
    {
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
}
