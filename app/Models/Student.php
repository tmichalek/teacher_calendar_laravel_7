<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='student';
    protected $primaryKey='id_student';

    public function grade()
    {
        return $this->belongsTo('App/Models/Grade', 'id_grade');
    }

    public function rating()
    {
        return $this->belongsToMany('App/Models/Rating', 'id_rating');
    }
}
