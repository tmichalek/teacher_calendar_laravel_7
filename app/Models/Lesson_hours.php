<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson_hours extends Model
{
    protected $primaryKey='id_lesson_hours';

    public function schedule()
    {
        return $this->belongsToMany('App/Models/Schedule', 'id_schedule');
    }


}
