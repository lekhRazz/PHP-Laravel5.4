<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    public function person(){
    	
    	return $this->belongsTo('App\Person');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function childetail(){
    	return $this->hasMany('App\waiting_child_detail');
    }
}
