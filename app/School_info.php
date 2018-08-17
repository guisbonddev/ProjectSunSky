<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School_info extends Model
{
    protected $table = 'school_info';

    public function manager(){

    	return $this->hasOne('App\User','id','manager');
    }
}
