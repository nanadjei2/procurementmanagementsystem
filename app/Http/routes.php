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

	Route::get('signup',['uses'=>'UserController@Signup'])->name('signup');

	Route::post('post-signup',['uses'=>'UserController@PostSignup'])->name('post-signup');

	Route::get('admin-dashboard', ['middleware' => 'admin', 'uses' => 'AdminController@getAdminDashboard'])->name('admin-dashboard');

	// Route::get('dashboard', ['uses' => 'UserController@getDashboard','middleware'=>'auth'])->name('dashboard');

<<<<<<< HEAD

	// Route::get('admin-dashboard', ['uses' => 'UserController@getAdminDashboard','middleware'=>'auth'])->name('admin-dashboard');
=======
>>>>>>> 3f709bb720ad6c6b5afa3a968df62dc710ca21be

	
	Route::get('register-member',['uses'=>'RegisteredMembersController@RegisterNewMember'])->name('register-member');

	// Route::post('registerpost',['uses'=>'MemberController@PostRegisterMember','middleware'=>'auth'])->name('registerpost');

	 	



});
