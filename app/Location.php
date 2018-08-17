<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function manager(){

		return $this->hasOne('App\User');
    }

}
