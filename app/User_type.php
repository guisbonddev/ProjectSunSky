<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_type extends Model
{
    protected $table = 'user_types';

    public function users(){

    	return $this->belongsToMany('App\User','type','id');
    }
}
