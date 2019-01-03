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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function(){

Route::resources([
	'users'=>'UserController',
	'biodatas'=>'BiodataController',
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