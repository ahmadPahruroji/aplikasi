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
	return view('auth/login');
});

Route::get('check',function(){
	switch (Auth::user()->role_id) {
		case '1':
			return redirect('/home?login=true');
			break;
		case '2':
			return redirect('/homemember?login=true');
			break;
		case '3':
			return redirect('/homecoordinator');
			break;
		
		default:
			# code...
			break;
	}
});

Auth::routes();



Route::group(['middleware'=>'auth'],function(){

	Route::group(['middleware'=>'role:1'],function(){

		Route::get('/home', 'HomeController@index')->name('home');
		Route::resources([
			'users'=>'UserController',
			'biodatas'=>'BiodataController',
			'profile'=>'ProfileController',
			'categories'=>'CategoryController',
			'complaints'=>'ComplaintController',
			'contacts'=>'ContactController',
			'coordinators'=>'CoordinatorController',
			'countributions'=>'CountributionController',
			'events'=>'EventController',
			'evidences'=>'EvidenceController',
			'members'=>'MemberController',
			'officers'=>'OfficerController',
			'spendings'=>'SpendingController',
			'proofs'=>'ProofController',

		]);
	});

	Route::group(['middleware'=>'role:2'],function(){
		Route::get('/homemember', 'Member\HomeMemberController@index')->name('homemember');
		Route::resources([
			'countributionusers'=>'Member\CountributionController',
			'eventsusers'=>'Member\EventController',
			'proofusers'=>'Member\ProofController',
			'profileusers'=>'Member\UsersController',
			'complaintusers'=>'Member\ComplaintController',
			'spendingusers'=>'Member\SpendingController',
		]);
	});

	Route::group(['middleware'=>'role:3'],function(){
		Route::get('/homecoordinator', 'Coordinator\HomeCoordinatorController@index')->name('homecoordinator');
		Route::resources([
			
			'countributionuser'=>'Coordinator\CountributionController',
			'complaintuser'=>'Coordinator\ComplaintController',

		]);
	});
});