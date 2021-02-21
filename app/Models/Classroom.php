<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $primaryKey='id_classroom';


    public function schedule()
    {
        return $this->belongsToMany('App\Models\Schedule', 'id_schedule');
    }

}

