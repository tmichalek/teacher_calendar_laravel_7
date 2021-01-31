<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Days_of_week extends Model
{
    protected $prmaryKey='id_days_of_week';

    public function schedule()
    {
        return $this->belongsToMany('App/Models/Schedule', 'id_schedule');
    }
}
