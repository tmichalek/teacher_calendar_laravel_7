<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey='id_role';

    public function user(){
        return $this->belongsToMany('App\User','role_user', 'id_role', 'id_user');
    }
}
