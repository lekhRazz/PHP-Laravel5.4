<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public function donator(){
    	 return $this->belongsTo('App\Donator');
    }
}
