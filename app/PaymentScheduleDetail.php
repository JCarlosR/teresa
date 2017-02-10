<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PaymentScheduleDetail extends Model
{
    protected $fillable = ['payment_schedule_id', 'emission_date', 'total', 'net'];

    protected $dates = ['emission_date', 'payment_date'];

    public function getDaysDifferenceAttribute()
    {
        // If there is a fixed payment date

        if ($this->payment_date) {
            $daysDifference = $this->emission_date->diffInDays($this->payment_date, false);
            if ($daysDifference > 0)
                return $daysDifference . ' días después';
            else if ($daysDifference == 0)
                return 'El mismo día';
            else
                return $daysDifference*-1 . ' días antes';
        }


        // Using the current date

        $daysDifference = Carbon::now()->diffInDays($this->emission_date, false);

        if ($daysDifference > 0)
            return 'Faltan ' . $daysDifference . ' días';
        else if ($daysDifference == 0)
            return 'Debe pagar hoy';
        else
            return $daysDifference*-1 . ' días de retraso';
    }
}
