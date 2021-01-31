<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $primaryKey='id_teacher';


    public function grade()
    {
        return $this->belongsToMany('App/Models/Grade', 'id_grade');
    }

    public function subject()
    {
        return $this->belongsToMany('App/Models/Subject', 'id_subject');

    }

    public function schedule()
    {
        return $this->belongsToMany('App/Models/Schedule', 'id_schedule');
    }

    public function user()
    {
        return $this->hasOne('App/Users');
    }
}
