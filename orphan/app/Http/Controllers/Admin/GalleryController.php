<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;

class GalleryController extends Controller
{
    public function showgallery(){
    	$gal=Gallery::all();
    	return view('admin.gallery',array('galle'=>$gal));
    }

    public function showadnew(){
    	return view('admin.addgallery');
    }
    public function post_adnew(Request $request){

    	$gall=new Gallery();
    	$file=$request->file('gimage');
		$path=$file->store('gallery_image');
		$gall->gimage=$path;
    	$gall->img_title=$request['img_title'];
    	$gall->event=$request['event'];
    	$gall->evnt_place=$request['evnt_place'];
    	$gall->evnt_date=$request['evnt_date'];
    	$gall->save();
    	return redirect('admin/gallery');

    }
    public function delete_gallery(Request $request){
        $id=$request['id'];
        Gallery::where('id','=',$id)->delete();
        return redirect('admin/gallery');
    }
    public function edit_gallery(Request $request){
        $id=$request['id'];
        $gal=Gallery::where('id','=',$id)->get();
        return view('admin.edit_gallery',array('galry'=>$gal));
    }
    public function store_edit_gallery(Request $request){

        $id=$request['id'];
            $file=$request->file('gimage');
        $path=$file->store('gallery_image');
        $gimage=$path;
        $img_title=$request['img_title'];
        $event=$request['event'];
        $evnt_place=$request['evnt_place'];
        $evnt_date=$request['evnt_date'];
        Gallery::where('id','=',$id)->update(array('gimage'=>$gimage,'img_title'=>$img_title,'event'=>$event,'evnt_place'=>$evnt_place,'evnt_date'=>$evnt_date));
        return redirect('admin/gallery');

    }
}
