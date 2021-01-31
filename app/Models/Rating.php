<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $primaryKey='id_rating';


    public function rate()
    {
        return $this->belongsToMany('App/Models/Rate', 'id_rate');
    }

    public function subject()
    {
        return $this->belongsToMany('App/Models/Subject', 'id_subject');
    }

    public function grade()
    {
        return $this->belongsToMany('App/Models/Grade', 'id_grade');
    }

    public function student()
    {
        return $this->belongsToMany('App/Models/Student', 'id_student');
    }


}
