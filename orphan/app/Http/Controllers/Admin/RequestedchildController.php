<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Child;
use App\User;


class RequestedchildController extends Controller
{
    public function show_requestedchild(){
    	$chil=Child::where('status','=','3')->get();
    	return view('admin.requestedchild',array('childs'=>$chil));
    }
    public function confirm_requestedchild(Request $request){
    	$id=$request['id'];
    	Child::where('id','=',$id)->update(array('status'=>4));
    	return redirect('admin/requestedchild');
    }
    public function delete_requestedchild(Request $request){
    	$id=$request['id'];
    	Child::where('id','=',$id)->update(array('status'=>2));
    	return redirect('admin/requestedchild');
    }
    public function show_parent_profile(Request $request){
    	$id=$request['id'];
    	$usr=User::where('id','=',$id)->get();
    	return view('admin.parnt_profile',array('usrs'=>$usr));

    }
}
