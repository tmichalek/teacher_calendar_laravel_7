<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $primaryKey='id_rate';

    public function rating()
    {
        return $this->belongsToMany('App/Models/Rating', 'id_rating');
    }
}
