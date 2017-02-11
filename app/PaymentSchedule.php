<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentSchedule extends Model
{
    protected $fillable = ['user_id', 'starter_date', 'coin_type', 'total_amount', 'income_tax', 'modality', 'quotas'];

    protected $dates = ['starter_date'];

    public function getModalityTextAttribute()
    {
        if ($this->modality == 'Q') return 'Trimestre';
        return 'Mes';
    }

    public function getModalityShortTextAttribute()
    {
        if ($this->modality == 'Q') return 'T';
        return 'M';
    }

    public function details()
    {
        return $this->hasMany('App\PaymentScheduleDetail');
    }
}
