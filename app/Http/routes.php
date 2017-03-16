<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::group(['middlewareGroups'], function(){

	Route::get('/',['uses'=>'UserController@getLogin'])->name('login');

	Route::get('signup',['uses'=>'UserController@Signup'])->name('signup');

	Route::get('get-admin', 'UserController@postAdmin');

	Route::get('/dashboard', [ 'middleware' => 'admin', 'uses' => 'UserController@getDashboard'])->name('dashboard');

	// Route::post('postlogin',['uses'=>'UserController@postLogin'])->name('postlogin');

	// Route::get('logout',['uses'=>'UserController@Logout','middleware'=>'auth'])->name('logout');

	// Route::get('userdashboard',['middleware'=>'auth', function(){

	// 	return view('pages.userdashboard');

	// }])->name('userdashboard');


	// Route::get('register-new-member',['uses'=>'MemberController@RegisterNewMember','middleware'=>'auth'])->name('register-new-member');

	// Route::post('registerpost',['uses'=>'MemberController@PostRegisterMember','middleware'=>'auth'])->name('registerpost');

	 	



});
