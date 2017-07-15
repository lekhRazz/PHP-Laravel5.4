<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function showgallery(){
    	$gal=Gallery::all();
   		return view('user.gallery',array('galle'=>$gal));
}
}
