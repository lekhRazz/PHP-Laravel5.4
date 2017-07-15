<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\Admin\MemberRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\member;
use App\MemberDetail;

class MemberController extends Controller
{
    public function showmember(){
      	$memb=member::all();
      	return view('admin.member',array('members'=>$memb));
    }

    public function show_addmember(){
      	return view('admin.addmember');
      }

   	public function show_memberdetail(Request $request){
          $id=$request['id'];
          $memb=member::where('id','=',$id)->get();
          $membdtl=MemberDetail::where('mebmr_id','=',$id)->get();
   		return view('admin.memberdetails',array('members'=>$memb,'membrdt'=>$membdtl));
   	}

    
   	public function store_addmember(MemberRequest $request){

     		$memb=new member();
     		$file=$request->file('membrimg');
    		$path=$file->store('member');
    		$memb->membrimg=$path;
    		$memb->membr_name=$request['membr_name'];
    		$memb->member_post=$request['member_post'];
        $memb->membr_email=$request['membr_email'];
        $memb->membr_addr=$request['membr_addr'];
        $memb->membr_phone=$request['membr_phone'];
    		$memb->sex=$request['sex'];
    		$memb->membr_exprnc=$request['membr_exprnc'];
    		$memb->membr_qulifi=$request['membr_qulifi'];
    		$memb->save();
		return redirect('admin/member');
   	}



    public function show_memberedit(Request $request){
          $id=$request['id'];
          $memb=member::where('id','=',$id)->get();
      return view('admin.editmember',array('members'=>$memb));
    }


    public function store_memberedit(Request $request){
        $id=$request['id'];
        $file=$request->file('membrimg');
        $path=$file->store('member');
        $membrimg=$path;
        $membr_name=$request['membr_name'];
        $member_post=$request['member_post'];
        $membr_email=$request['membr_email'];
        $membr_exprnc=$request['membr_exprnc'];
        $membr_qulifi=$request['membr_qulifi'];
        member::where('id','=',$id)->update(array('membrimg'=>$membrimg,'membr_name'=>$membr_name,'member_post'=>$member_post,'membr_email'=>$membr_email,'membr_exprnc'=>$membr_exprnc,'membr_qulifi'=>$membr_qulifi));
        return redirect('admin/member');

    }


    public function delete_member(Request $request){
        $id=$request['id'];
        member::where('id','=',$id)->delete();
      return redirect('admin/member');
    }

    
    public function update_memberdetail(Request $request){
          $id=$request['id'];
          $result=member::where('id','=',$id)->get();
      return view('admin.member_detail_table',array('memb'=>$result));
    }

    public function store_memberdetail(Request $request){
      $id=$request['id'];
      $memb=new MemberDetail;
      $memb->year=$request['year'];
      $memb->month=$request['month'];
      $memb->present_day=$request['present_day'];
      $memb->membr_salary=$request['membr_salary'];
      $memb->salary=$request['salary'];
      $memb->membr_sal_date=$request['membr_sal_date'];
      $memb->mebmr_id=$id;
      $memb->save();
      return redirect('admin/member');


    }


    public function edit_memberdetail_table(Request $request){
      $id=$request['id'];
      $membrdtl=MemberDetail::where('id','=',$id)->get();
      return view('admin.edit_membertable',array('membrdt'=>$membrdtl));
    }

    public function post_memberdetail_table(Request $request){
      $id=$request['id'];
      $year=$request['year'];
      $month=$request['month'];
      $present_day=$request['present_day'];
      $membr_salary=$request['membr_salary'];
      $salary=$request['salary'];
      $membr_sal_date=$request['membr_sal_date'];
      MemberDetail::where('id','=',$id)->update(array('year'=>$year,'month'=>$month,'present_day'=>$present_day,'membr_salary'=>$membr_salary,'salary'=>$salary,'membr_sal_date'=>$membr_sal_date));
      return redirect('admin/member');
    }

    public function delete_memberdetail_table(Request $request){
      $id=$request['id'];
      MemberDetail::where('id','=',$id)->delete();
      return redirect('admin/member');
    }

}
