<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

/*use App\child;
use App\person*/;
use App\member;
use App\User;
use App\UserImage;


class UserController extends Controller
{
  public function index(){
  	return view('welcome');
  }
  
   public function member(){

	   	$memb= member::all();
	   	return view('user.member',array('members'=>$memb));
   }

   public function show_userprofile(Request $request){
	   	$id=$request['id'];
	   	$usr=User::where('id','=',$id)->get();
	   	 $img=UserImage::Find(Auth()->user()->id)->latest()->get();
	   	return view('user.userprofile',array('usrs'=>$usr,'imgs'=>$img));

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
        return redirect('/home');
     }



     public function show_userphotos(Request $request){
     	//dd('url ayo');
     	$id=$request['id'];
     	$img=UserImage::where('usr_id','=',$id)->get();
     	return view('user.userphotos',array('imgs'=>$img));
     }
   
 

public function showabout(){
   
   return view('user.aboutus');
}

}