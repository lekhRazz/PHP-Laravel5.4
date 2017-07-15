<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persondetail extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
