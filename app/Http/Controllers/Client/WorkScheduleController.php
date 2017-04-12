<?php

namespace App\Http\Controllers\Client;

use App\WorkSchedule;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkScheduleController extends Controller
{
    public function index()
    {
        $client = auth()->user();

        $workSchedule = WorkSchedule::where('user_id', $client->id)
                            ->orderBy('created_at', 'desc')->first();

        // Generate an incomplete matrix (only with the required data)
        $workScheduleDetails = $workSchedule->details;
        $details = [];
        foreach ($workScheduleDetails as $workScheduleDetail) {
            $details[$workScheduleDetail->type][$workScheduleDetail->month_offset] = $workScheduleDetail->state;
        }

        return view('client.work.index')->with(compact('client', 'workSchedule', 'details'));
    }
}
