<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class waiting_child_detail extends Model
{
    public function child(){
    	return $this->belongsTo('App\Child');
    }
}
