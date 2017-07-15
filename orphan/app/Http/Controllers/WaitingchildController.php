<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Child;
use App\person;
use App\Persondetail;
use App\User;

class WaitingchildController extends Controller
{
    
   public function shownotice(){
   
   	$chil=Child::where('status','=','2')->get();
   return view('user.waitingchild',array('childs'=>$chil));
  }

  public function showagreement(Request $request){

    $id=$request['id'];
    $chil=Child::where('id','=',$id)->get();

  	return view('user.agreementletter',array('child'=>$chil));
  }

  public function show_parentregister(Request $request){
    $id=$request['id'];
    $chil=Child::where('id','=',$id)->get();
  	return view ('user.parentregister',array('child'=>$chil));
  }


  public function store_parentregister(Request $request){

    $id=$request['child_id'];

    $per=new Persondetail;

    $file=$request->file('parent_img');
    $path=$file->store('User_image');
    $per->parent_img=$path;
    $per->Parent_occ=$request['Parent_occ'];
    $per->parent_saving=$request['parent_saving'];
    $per->parent_family=$request['parent_family'];
    $per->status=$request['status'];
    $per->sex=$request['sex'];

    $file1=$request->file('ctznshp_img');
    $path1=$file1->store('Citizenship_image');
    $per->ctznshp_img=$path1;
    $per->user_id=Auth()->user()->id;
    if($per->save()){
      Child::where('id','=',$id)->update(array('status'=>3,'user_id'=>Auth()->user()->id));
     

    }
    return redirect('home/waitingchild');

  }
}
