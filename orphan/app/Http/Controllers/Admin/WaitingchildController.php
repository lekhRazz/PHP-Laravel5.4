<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Child;
use App\Persondetail;
use App\User;
use App\Person;
use App\waiting_child_detail;

class WaitingchildController extends Controller
{
	public function show_waitingchild(){
		$chil=Child::where('status','=','2')->get();
    	return view('admin.waitingchild',array('childs'=>$chil));
    }
	
   public function show_waitingchild_detail(Request $request){
    $id=$request['id'];
    $chil=Child::where('id','=',$id)->get();
    $childtl=waiting_child_detail::where('c_id','=',$id)->get();
   	return view('admin.waitingchild_detail',array('childs'=>$chil,'cdtl'=>$childtl));
   }

   public function show_org_policy(Request $request){
    $id=$request['id'];
    $chil=Child::where('id','=',$id)->get();
    return view('admin.organization_policy',array('childs'=>$chil));
   }


   public function show_parent_form(Request $request){
      $id=$request['id'];
      $chil=Child::where('id','=',$id)->get();
   		return view('admin.parent_register',array('childs'=>$chil));
   }


   public function store_parent_form(Request $request){

      $id=$request['child_id'];

   		$usr=new User();
   		$usr->name=$request['parent_name'];
   		$usr->address=$request['parent_address'];
   		$usr->phone=$request['parent_phone'];
   		$usr->email=$request['parent_email'];
   		$usr->password=$request['parent_password'];
      if($usr->password==$request['parent_password2']){
        $usr->password= bcrypt($usr->password);
      }
   		if($usr->save())
   		{
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
		    $per->user_id=$usr->id;

		    if($per->save()){

           Child::where('id','=',$id)->update(array('status'=>4,'user_id'=>$usr->id));
        }
   		}
   		return redirect('admin/waitingchild');
   }

   
   public function show_reference_parent(Request $request){
    $id=$request['id'];
    $parnt=Person::where('id','=',$id)->get();
    return view('admin.reference_parent',array('prnt'=>$parnt));
   }


   public function show_update_form(Request $request){

        $id=$request['id'];
        $chil=Child::where('id','=',$id)->get();
        return view('admin.update_child_record',array('childs'=>$chil));

   }


public function store_update_form(Request $request){
        
        $id=$request['id'];

        $cname=$request['cname'];
        $cage=$request['cage'];
        $sex=$request['sex'];
        $education=$request['education'];
        $health=$request['health'];
        $file2=$request->file('cimage');
        $path2=$file2->store('children');
        $cimage=$path2;
        $refphone=$request['refphone'];
        $file3=$request->file('refimage');
        $path3=$file3->store('children');
        $refimage=$path3;
Child::where('id','=',$id)->update(array('cname'=>$cname,'cage'=>$cage,'sex'=>$sex,'education'=>$education,'health'=>$health,'cimage'=>$cimage,'refphone'=>$refphone,'refimage'=>$refimage));
        return redirect('admin/waitingchild');
  }

  public function show_waitingchild_detail_update(Request $request){
    $id=$request['id'];
    $chil=Child::where('id','=',$id)->get();
    return view('admin.waitingchild_detail_update',array('childs'=>$chil));
  }

  public function store_waitingchild_detail_update(Request $request){
    $id=$request['c_id'];
    $cd=new waiting_child_detail;
    $cd->wc_school=$request['wc_school'];
    $cd->wc_perform=$request['wc_perform'];
    $cd->wc_height=$request['wc_height'];
    $cd->wc_weight=$request['wc_weight'];
    $cd->wc_bgroup=$request['wc_bgroup'];
    $cd->wc_hopital=$request['wc_hopital'];
    $cd->wc_remark=$request['wc_remark'];
    $cd->c_id=$id;
    $cd->save();
    return redirect('admin/waitingchild');

  }

}
