<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\WorkSchedule;
use Illuminate\Http\Request;

class WorkScheduleController extends Controller
{
    public function index()
    {
        $workSchedules = User::find(session('client_id'))->work_schedules;
        return view('admin.work.index')->with(compact('workSchedules'));
    }

    public function show($id)
    {
        $client = User::find(session('client_id'));

        $workSchedule = WorkSchedule::find($id);
        $workScheduleDetails = $workSchedule->details;

        $details = [];
        foreach ($workScheduleDetails as $workScheduleDetail) {
            $details[$workScheduleDetail->type][$workScheduleDetail->month_offset] = $workScheduleDetail->state;
        }

        return view('admin.work.show')->with(compact('client', 'workSchedule', 'details'));
    }

    public function edit($id)
    {
        $workSchedule = WorkSchedule::find($id);
        $details = $workSchedule->details;
        return view('admin.work.edit')->with(compact('workSchedule', 'details'));
    }

    public function store(Request $request)
    {
        $workSchedule = new WorkSchedule();
        $workSchedule->start_date = $request->input('start_date');
        $workSchedule->user_id = session('client_id');
        $workSchedule->save();

        return back()->with('notification', 'Cronograma registrado correctamente.');
    }

    public function update($id, Request $request)
    {
        $workSchedule = WorkSchedule::find($id);
        $workSchedule->start_date = $request->input('start_date');
        $workSchedule->save();

        return back()->with('notification', 'Fecha de inicio actualizada correctamente.');
    }
}
