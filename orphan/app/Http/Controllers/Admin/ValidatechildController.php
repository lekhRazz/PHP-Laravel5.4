<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Child;
use File;

class ValidatechildController extends Controller
{
   public function show_childvalidate(){

   	$chil=Child::where('status','=','1')->get();
   	return view('admin.childvalidation',array('childs'=>$chil));
   }

   public function validate_child(Request $request){
   	$id=$request['id'];
   	Child::where('id','=',$id)->update(array('status'=>2));
   	return redirect('admin/childvalidation');

   }

   public function delete_child(Request $request, $id){
        //dd('enter');
        if (!$child = Child::find($id))
            dd('invalid data');
        // return redirect()->route('admin.error', ['code' => '500']);

        // remove image before deleting db row
        if ($child->cimage) {
            // remove old image
         //dd("hwllo");
            $path = public_path().'/storage/'.$child->cimage;
            //dd($path);
               if(file_exists($path)) {
                  unlink($path);
                  File::delete($path);
               }
        }
        
        if($child->refimage){
         $path=public_path().'/storage/'.$child->refimage;
         if(file_exists($path)){
            unlink($path);
            File::delete($path);
         }
        }

   	// $id=$request['id'];
   	// Child::where('id','=',$id)->delete();
      $child->delete();
   	return redirect('admin/childvalidation');
   }
}

