<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
  public function child(){
  	return $this->hasOne('App\Child');
  }  
}
