<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donator extends Model
{
    public function donation(){
    	return $this->hasMany('App\Donation');
    }
}
