<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function aircraft(){

    	return $this->hasOne('App\Resource','id','aircraft');
    }

    public function other_resources(){

    	return $this->hasOne('App\Resource','id','other_resources');
    }
}
