<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $primaryKey='id_subject';

    public function teacher()
    {
        return $this->belongsToMany('App\Models\Teacher', 'id_teacher');
    }

    public function rating()
    {
        return $this->belongsToMany('App\Models\Rating', 'id_rating');
    }
}
