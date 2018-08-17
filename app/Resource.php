<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function location(){

    	return $this->hasOne('App\Location');
    }

    public function booking(){ // just for aircraft

    	return $this->belongsToMany('App\Booking','aircraft','id');
    }

    public function other_resources(){ // for other resources

    	return $this->belongsToMany('App\Booking','other_resources','id');
    }
}
