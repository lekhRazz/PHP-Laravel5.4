<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Donator;
use App\Donation;


class DonationController extends Controller
{
    
   public function showdonate(){

   	$donation=Donation::all();

   return view('user.donation',array('donations'=>$donation));
}


/*public function makedonate(){

   return view('user.makedonation');

}*/


/*public function storedonation(Request $request){

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
	$donation->damount=$request['damount'];
	$donation->donator_id=$donator->id;
	$file2=$request->file('voucher');
	$path2=$file2->store('donation');
	$donation->voucher=$path2;
	$donation->save();
}
	return redirect('/home/donation');

}*/

}
