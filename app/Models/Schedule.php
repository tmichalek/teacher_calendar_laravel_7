<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $primaryKey='id_schedule';

    public function days_of_week()
    {
        return $this->belongsToMany('App/Models/Days_of_Week', 'id_days_of_week');
    }

    public function lesson_hours()
    {
        return $this->belongsToMany('App/Models/Lesson_hours', 'id_lesson_hours');
    }

    public function classroom()
    {
        return $this->belongsToMany('App/Models/Classroom', 'id_classroom');
    }

    public function grade()
    {
        return $this->belongsToMany('App/Models/Grade', 'id_grade');
    }

    public function teacher()
    {
        return $this->belongsToMany('App/Models/Teacher', 'id_teacher');
    }
}
