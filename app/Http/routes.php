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

	Route::get('/',[ 'uses'=>'UserController@getLogin'])->name('login');

	Route::post('post-login',['uses'=>'UserController@postLogin'])->name('post-login');

	Route::get('logout',['uses'=>'UserController@Logout','middleware'=>'auth'])->name('logout');

	Route::get('get-admin', 'UserController@postAdmin');//This will actually hard-post a new admin to the database

	Route::get('signup',['middleware' => 'guest','uses'=>'UserController@Signup'])->name('signup');

	Route::post('post-signup',['uses'=>'UserController@PostSignup'])->name('post-signup');

	Route::get('dashboard', ['middleware' => 'auth','uses' => 'UserController@getDashboard'])->name('dashboard');
	Route::get('admin-dashboard', ['middleware' => 'admin', 'uses' => 'AdminController@getAdminDashboard'])->name('admin-dashboard');

	Route::get('dashboard', ['uses' => 'UserController@getDashboard','middleware'=>'auth'])->name('dashboard');
<<<<<<< HEAD
	
=======

<<<<<<< HEAD
	Route::get('admin-dashboard', ['uses' => 'UserController@getAdminDashboard','middleware'=>'auth'])->name('admin-dashboard');
=======

>>>>>>> 71787934254210a31e2e4b48bdcc43e7247971d8
	
>>>>>>> afd7cd6450d97526151e8fe3d41a61bd334be6e7

	Route::get('register-member',['uses'=>'RegisteredMembersController@RegisterNewMember'])->name('register-member');

	// Route::post('registerpost',['uses'=>'MemberController@PostRegisterMember','middleware'=>'auth'])->name('registerpost');

	 	



});
