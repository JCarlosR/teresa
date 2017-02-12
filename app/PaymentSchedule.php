<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentSchedule extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'title', 'starter_date', 'coin_type', 'total_amount', 'income_tax', 'modality', 'quotas'];

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
