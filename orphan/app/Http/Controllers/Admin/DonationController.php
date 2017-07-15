<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Donator;
use App\Donation;


class DonationController extends Controller
{
    public function showdonation(){
    	return view('admin.makedonation');
    }


    public function store_donation(Request $request){
    	$donator=new Donator();
		$file=$request->file('dimage');
		$path=$file->store('donator');
		$donator->dimage=$path;
		$donator->dname=$request['dname'];
		$donator->demail=$request['demail'];
		$donator->dphone=$request['dphone'];
		$donator->daddress=$request['daddress'];
		$donator->doccupation=$request['doccupation'];

		if($donator->save()){

		$donation=new Donation();
		$donation->bank_name=$request['dbank'];
		$donation->d_date=$request['d_date'];
		$donation->damount=$request['damount'];
		$donation->donator_id=$donator->id;
		$file2=$request->file('voucher');
		$path2=$file2->store('donation');
		$donation->voucher=$path2;
		$donation->save();
		}
		return redirect('admin/donation');

    }


    public function showdonors(){
    	$donation=Donation::all();
 		return view('admin.donors',array('donations'=>$donation));
    
    }


    public function delete_donors(Request $request){
    	$id=$request['id'];
    	Donator::where('id','=',$id)->delete();
    	return redirect('admin/donors');
    }


    public function dedit_donors(Request $request){
    	$id=$request['id'];
    	$donation=Donation::where('id','=',$id)->get();
    	return view('admin.edit_donors',array('donations'=>$donation));

    }

    public function store_edited_donors(Request $request){
    	$d_id=$request['d_id'];
    	$id=$request['id'];

    	$file=$request->file('dimage');
		$path=$file->store('donator');
		$dimage=$path;
		$dname=$request['dname'];
		$demail=$request['demail'];
		$dphone=$request['dphone'];
		$daddress=$request['daddress'];
		$doccupation=$request['doccupation'];

		$bank_name=$request['dbank'];
		$d_date=$request['d_date'];
		$damount=$request['damount'];
		$file2=$request->file('voucher');
		$path2=$file2->store('donation');
		$voucher=$path2;

		Donator::where('id','=',$d_id)->update(array('dimage'=>$dimage,'dname'=>$dname,'demail'=>$demail,'dphone'=>$dphone,'daddress'=>$daddress));
		Donation::where('id','=',$id)->update(array('bank_name'=>$bank_name,'d_date'=>$d_date,'damount'=>$damount,'voucher'=>$voucher));
		return redirect('admin/donors');


    }
}
