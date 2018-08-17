<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function location(){

    	return $this->hasOne('App\Location');
    }
}
