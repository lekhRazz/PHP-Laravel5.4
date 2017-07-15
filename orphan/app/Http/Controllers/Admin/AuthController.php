<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{
    public function showauth(){
    	$usr=User::where('role','=','2')->get();
    	return view('admin.authenticate',array('usrs'=>$usr));
    }
    public function store_auth(Request $request){
    	$id=$request['id'];
    	User::where('id','=',$id)->update(array('role'=>'2'));
    	return redirect('admin/authenticate');

    }
    public function delete_auth(Request $request){

    	$id=$request['id'];
    	User::where('id','=',$id)->delete();
    	return redirect('admin/authenticate');
    }
    public function create_admin(){
        return view('admin.create_admin');
    }
    public function store_admin(Request $request){
        $usr=new User;
        $usr->name=$request['name'];
        $usr->address=$request['address'];
        $usr->phone=$request['phone'];
        $usr->email=$request['email'];
        $usr->password=$request['password'];
        if($usr->password==$request['password1']){
            $usr->password=bcrypt($usr->password);
        }
        if($usr->save()){
            User::where('id','=',$usr->id)->update(array('role'=>2));
        }
        return redirect('admin/authenticate');
    }
}
