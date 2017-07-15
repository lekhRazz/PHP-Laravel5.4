<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\RegisterRequest;
use App\Http\Controllers\Controller;
use App\Child;
use App\Person;

class RegisterController extends Controller
{
    public function showregister(){
    	return view('admin.register');
    }


    public function store_register(RegisterRequest $request){
	    $per=new Person();
	   	$per->uname=$request['uname'];
	   	$per->email=$request['email'];
	   	$per->uphone=$request['uphone'];
	   	$per->uaddress=$request['uaddress'];
	   	$file=$request->file('uimage');
	   	$path=$file->store('person');
	   	$per->uimage=$path;
   	


   if($per->save())
   {

	   	$chil=new Child();
	   	$chil->cname=$request['cname'];
	   	$chil->cage=$request['cage'];
	    $chil->sex=$request['sex'];
	    $chil->education=$request['education'];
	   	$chil->health=$request['health'];
	   	$chil->person_id=$per->id;
	   	$file2=$request->file('cimage');
	   	$path2=$file2->store('children');
	   	$chil->cimage=$path2;
	   	$chil->refphone=$request['refphone'];
	   	$file3=$request->file('refimage');
	   	$path3=$file3->store('orphan_certificate');
	   	$chil->refimage=$path3;
	   if($chil->save())
	   {
	   	Child::where('id','=',$chil->id)->update(array('status'=>2));

	   }


   
   }
    
    return redirect('admin/register');

   }
}
