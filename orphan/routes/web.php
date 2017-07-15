<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','UserController@index')->name('home.page');
Route::get('/home/aboutus','UserController@showabout');
Route::get('/home/gallery','GalleryController@showgallery');
Route::get('/home/userprofile','UserController@show_userprofile');
Route::post('/home/userprofile','UserController@store_userprofile');
Route::get('/home/userprofile/photos','UserController@show_userphotos');



Route::get('/home/waitingchild','WaitingchildController@shownotice');



Route::get('/home/member','UserController@member');

Route::get('/home/donation','DonationController@showdonate');
/*Route::get('/home/donation/makedonation','DonationController@makedonate');
Route::post('/home/donation/makedonation','DonationController@storedonation');*/


Route::group(['middleware'=>'auth'],function(){
	Route::get('/home/register','RegisterController@index');
	Route::post('/home/register','RegisterController@store');
	Route::get('/home/waitingchild/agreement','WaitingchildController@showagreement');

Route::get('/home/waitingchild/agreement/parent_register','WaitingchildController@show_parentregister');
Route::post('/home/waitingchild/agreement/parent_register','WaitingchildController@store_parentregister');


});




Route::group(['prefix'=>'admin','middleware'=>['auth','role'],'namespace'=>'Admin'],function(){

Route::get('/','DashboardController@dashboard');
Route::get('/','DashboardController@dashboard')->name('admin.dashboard');
Route::get('layout/edit','DashboardController@edit_org_title')->name('admin.layout.edit');
Route::post('layout/edit','DashboardController@store_org_title')->name('admin.layout.edit');

Route::get('dashboard','DashboardController@dashboard')->name('admin.dashboard');
Route::get('authenticate','AuthController@showauth')->name('admin.authentication');
/*Route::get('authenticate/auth','AuthController@store_auth')->name('admin.authentication.auth');*/
Route::get('authenticate/delete','AuthController@delete_auth')->name('admin.authentication.delete');
Route::get('authenticate/createadmin','AuthController@create_admin')->name('admin.user.makeadmin');
Route::post('authenticate/createadmin','AuthController@store_admin')->name('admin.user.makeadmin');

Route::get('register','RegisterController@showregister')->name('child.register');
Route::post('register','RegisterController@store_register')->name('child.register');

Route::get('childvalidation','ValidatechildController@show_childvalidate')->name('child.validate');
Route::get('childvalidation/validate','ValidatechildController@validate_child')->name('child.validate.val');
Route::get('childvalidation/delete/{id}','ValidatechildController@delete_child')->name('child.validate.delete');

Route::get('waitingchild','WaitingchildController@show_waitingchild')->name('child.waiting');
Route::get('child/reference_person','WaitingchildController@show_reference_parent')->name('admin.child.suggested');
Route::get('waitingchild/agreement','WaitingchildController@show_org_policy')->name('admin.waitingchild.adopt');
Route::get('waitingchild/agreement/parent_register','WaitingchildController@show_parent_form')->name('admin.waitingchild.agree');
Route::post('waitingchild/agreement/parent_register','WaitingchildController@store_parent_form')->name('admin.waitingchild.agree');
Route::get('waitingchild/update','WaitingchildController@show_update_form')->name('admin.waitingchild.update');
Route::post('waitingchild/update','WaitingchildController@store_update_form')->name('admin.waitingchild.update');
Route::get('waitingchild/detail','WaitingchildController@show_waitingchild_detail')->name('admin.waitingchild.detail');
Route::get('waitingchild/detail/update','WaitingchildController@show_waitingchild_detail_update')->name('child.waiting.detail.update');
Route::post('waitingchild/detail/update','WaitingchildController@store_waitingchild_detail_update')->name('child.waiting.detail.update');

Route::get('requestedchild','RequestedchildController@show_requestedchild')->name('child.requested');
Route::get('requestedchild/confirm','RequestedchildController@confirm_requestedchild')->name('child.requested.confirm');
Route::get('requestedchild/delete','RequestedchildController@delete_requestedchild')->name('child.requested.delete');
Route::get('child/parent_profile','RequestedchildController@show_parent_profile')->name('admin.child.parent');

Route::get('adopted','AdoptedchildController@show_adoptedchild')->name('child.adopted');
Route::get('adopted/detail','AdoptedchildController@show_adoptedchild_detail')->name('child.adopted.detail');
Route::get('adopted/detail/updatetable','AdoptedchildController@show_adoptd_tableupdate')->name('adoptedchild.detail.update');
Route::post('adopted/detail/updatetable','AdoptedchildController@store_adoptd_tableupdate')->name('adoptedchild.detail.update');


Route::get('gallery','GalleryController@showgallery')->name('admin.gallery');
Route::get('gallery/adnew','GalleryController@showadnew')->name('admin.gallery.newad');
Route::post('gallery/adnew','GalleryController@post_adnew')->name('admin.gallery.newad');
Route::get('gallery/delete','GalleryController@delete_gallery')->name('admin.gallery.delete');
Route::get('gallery/edit','GalleryController@edit_gallery')->name('admin.gallery.edit');
Route::post('gallery/edit','GalleryController@store_edit_gallery')->name('admin.gallery.edit');

Route::get('member','MemberController@showmember')->name('admin.member');
Route::get('member/addmember','MemberController@show_addmember')->name('admin.member.addmember');
Route::post('member/addmember','MemberController@store_addmember')->name('admin.member.addmember');
Route::get('member/memberdetail','MemberController@show_memberdetail')->name('admin.member.memberdetail');
Route::get('member/memberdetail/updatetable','MemberController@update_memberdetail')->name('admin.member.memberdetail.update');
Route::post('member/memberdetail/updatetable','MemberController@store_memberdetail')->name('admin.member.memberdetail.update');
Route::get('member/memberdetail/edit','MemberController@edit_memberdetail_table')->name('admin.member.detailtable.edit');
Route::post('member/memberdetail/edit','MemberController@post_memberdetail_table')->name('admin.member.detailtable.edit');
Route::get('member/memberdetail/delete','MemberController@delete_memberdetail_table')->name('admin.member.detailtable.delete');
Route::get('member/edit','MemberController@show_memberedit')->name('admin.member.edit');
Route::post('member/edit','MemberController@store_memberedit')->name('admin.member.edit');
Route::get('member/delete','MemberController@delete_member')->name('admin.member.delete');

Route::get('donation','DonationController@showdonation')->name('admin.donation');
Route::post('donation','DonationController@store_donation')->name('admin.donation');
Route::get('donors','DonationController@showdonors')->name('admin.donors');
Route::get('donors/delete','DonationController@delete_donors')->name('admin.donor.delete');
Route::get('donors/edit','DonationController@dedit_donors')->name('admin.donor.edit');
Route::post('donors/edit','DonationController@store_edited_donors')->name('admin.donor.edit');

Route::get('aboutus','AboutusController@showaboutus')->name('admin.aboutus');


Route::get('userprofile','UserController@show_userprofile')->name('admin.userprofile');
Route::post('userprofile','UserController@store_userprofile')->name('admin.userprofile');
/*Route::get('userprofile/editrecord','UserController@edit_userprofile')->name('admin.user.edit');
Route::post('userprofile/editrecord','UserController@store_userprofile')->name('admin.user.edit');*/
});

Auth::routes();
Route::get('/home','UserController@index');
/*
Route::get('/home', 'HomeController@index');*/
