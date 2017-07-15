<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestchildController extends Controller
{
   public function show_requestedchild(){
   	return view('admin.resquestedchild');
   }
}
