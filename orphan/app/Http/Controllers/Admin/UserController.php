<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
Use App\UserImage;

class UserController extends Controller
{
    public function show_userprofile(Request $request){

        $id=$request['id'];
    	$usr=User::where('id','=',$id)->get();
        $img=UserImage::Find(Auth()->user()->id)->latest()->get();
    	return view('admin.userprofile',array('usrs'=>$usr,'imgs'=>$img));
    }

    public function store_userprofile(Request $request){
        $id=$request['u_id'];
        
        

        if(isset($_POST['submit'])){
            //dd('name ayo sere');
            $name=$request['name'];
           
            User::where('id','=',$id)->update(array('name'=>$name));
           
        }
        if(isset($_POST['submit1'])){
            //dd('email ayo sere');
             $email=$request['email'];
            User::where('id','=',$id)->update(array('email'=>$email));
         
        }
        if(isset($_POST['submit2'])){
           // dd('phone ayo sere');
            $phone=$request['phone'];
            User::where('id','=',$id)->update(array('phone'=>$phone));
            
        }
        if(isset($_POST['submit3'])){
           //dd('password ayo sere');
            $password=$request['password'];
            if($password==$request['password1']){
                $password=bcrypt($password);
            User::where('id','=',$id)->update(array('password'=>$password));
            
            }
        }
        if(isset($_POST['submit4'])){
            $img=new UserImage;
             $file=$request->file('uimage');
             $path=$file->store('User_image');
             $img->usr_img=$path;
             $img->usr_id=Auth()->user()->id;
             $img->save();
             
        }
        return redirect('admin/dashboard');
     }


    public function edit_userprofile(Request $request){
    	$id=$request['id'];
    	$usr=User::where('id','=',$id)->get();
   	return view('admin.edit_user_record',array('usrs'=>$usr));
    }


    public function userprofile(Request $request){

    $id=$request['id'];
	$name=$request['name'];
	$address=$request['address'];
	$phone=$request['phone'];
	$email=$request['email'];
	$password=$request['password'];
	if($password==$request['passsword1']){
		$password=md5($password);
	}

	User::where('id','=',$id)->update(array('name'=>$name,'address'=>$address,'phone'=>$phone,'email'=>$email,'password'=>$password));
	return redirect('admin/dashboard');
    }
}
