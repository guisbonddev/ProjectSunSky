<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function aircraft(){

    	return $this->hasMany('App\Resource','id','aircraft');
    }

    public function other_resources(){

    	return $this->hasMany('App\Resource','id','other_resources');
    }
}
