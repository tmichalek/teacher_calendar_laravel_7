<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $primaryKey='id_grade';

    public function student()
{
    return $this->hasMany('App/Models/Student', 'id_student');
}

    public function teacher()
    {
        return $this->belongsToMany('App/Models/Teacher', 'id_teacher');
    }


}
