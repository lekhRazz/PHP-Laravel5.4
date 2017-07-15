<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\RegisterRequest;
use App\Http\Controllers\Controller;

use App\Child;
use App\Person;


class RegisterController extends Controller
{
  public function index(){

   	return view('user.register');

   }

public function store(RegisterRequest $request){
   	$per=new Person();
   	$per->uname=$request['uname'];
   	$per->email=$request['email'];
   	$per->uphone=$request['uphone'];
   	$per->uaddress=$request['uaddress'];
   	$file=$request->file('uimage');
   	$path=$file->store('personal');
   	$per->uimage=$path;
   	/*$per->save();*/


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
   	$path3=$file3->store('children');
   	$chil->refimage=$path3;
   	$chil->save();


   
   }
    
    return redirect('/home/register');

   }


   
}
