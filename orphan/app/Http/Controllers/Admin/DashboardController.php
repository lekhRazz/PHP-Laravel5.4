<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Organization;

class DashboardController extends Controller
{
    public function dashboard(){
    	
    	return view('admin.dashboard');
    }
    public function edit_org_title(Request $request){
    	$id=$request['id'];
    	$org=Organization::where('id','=',$id)->get();
    	return view('admin.edit_layout',array('orgs'=>$org));
    }
    public function store_org_title(Request $request){
    	
    	$id=$request['id'];
    	$org_name=$request['org_name'];
    	$org_address=$request['org_address'];
    	$org_email=$request['org_email'];
        Organization::where('id','=',$id)->update(array('org_name'=>$org_name,'org_address'=>$org_address,'org_phone'=>$org_phone,'org_email'=>$org_email));
    	return redirect('admin/dashboard');

    }
}
