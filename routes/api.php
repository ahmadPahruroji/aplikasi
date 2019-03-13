<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('clients','API\OauthClientController');

Route::group(['middleware'=>'api','namespace'=>'API'],function(){
	Route::apiResources([
		'users'=>'UserController',
			'biodatas'=>'BiodataController',
			'profile'=>'ProfileController',
			'categories'=>'CategoryController',
			'complaints'=>'ComplaintController',
			// 'contacts'=>'ContactController',
			// 'coordinators'=>'CoordinatorController',
			'countributions'=>'CountributionController',
			'events'=>'EventController',
			'evidences'=>'EvidenceController',
			'members'=>'MemberController',
			'officers'=>'OfficerController',
			'spendings'=>'SpendingController',
			'proofs'=>'ProofController',
		]);
});