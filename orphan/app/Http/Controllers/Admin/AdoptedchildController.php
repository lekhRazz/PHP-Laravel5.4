<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Child;
use App\AChild_detail;


class AdoptedchildController extends Controller
{
    public function show_adoptedchild(){
    	$chil=Child::where('status','=','4')->get();
    	return view('admin.adoptedchild',array('childs'=>$chil));
    }


    public function show_adoptedchild_detail(Request $request){
    	$id=$request['id'];
    	$chil=Child::where('id','=',$id)->get();
    	$childtl=AChild_detail::where('c_id','=',$id)->get();
    	return view('admin.adoptedchild_detail',array('childs'=>$chil,'cdtl'=>$childtl));
    }


    public function show_adoptd_tableupdate(Request $request){
    	$id=$request['id'];
    	$chil=Child::where('id','=',$id)->get();
    return view('admin.adoptd_tableupdate',array('childs'=>$chil));
    }



    public function store_adoptd_tableupdate(Request $request){
    	$id=$request['c_id'];
    	$cd=new AChild_detail;
    $cd->ac_address=$request['ac_address'];
    $cd->ac_school=$request['ac_school'];
    $cd->ac_perform=$request['ac_perform'];
    $cd->ac_height=$request['ac_height'];
    $cd->ac_weight=$request['ac_weight'];
    $cd->ac_hopital=$request['ac_hopital'];
    $cd->ac_meetingdate=$request['ac_meetingdate'];
    $cd->ac_meetingplace=$request['ac_meetingplace'];
    $cd->c_id=$id;
    $cd->save();
    return redirect('admin/adopted');
    }
}
