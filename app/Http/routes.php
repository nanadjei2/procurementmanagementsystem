<?php

use App\User as User;

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

	Route::get('all-system-users', ['middleware' => 'admin', 'uses' => 'AdminController@getAllSystemUsers'])->name('all-system-users');


	// Route::get('supplier-registration', ['uses' => 'UserController@supplierResgistration'])->name('supplier-registration');

	 Route::get('dashboard', ['uses' => 'UserController@getDashboard','middleware'=>'auth'])->name('dashboard');

	 Route::get('dashboard-admin', ['uses' => 'UserController@getDashboardAdmin','middleware'=>'auth'])->name('dashboard-admin');

	Route::get('register-member',['uses'=>'RegisteredMembersController@RegisterNewMember', 'middleware' => 'auth'])->name('register-member');

	Route::post('post-register',['uses'=>'RegisteredMembersController@PostRegisterNewMember'])->name('post-register'); 

	Route::get('view-all-bidders', ['uses' => 'UserController@viewAll', 'middleware' => 'admin'])->name('view-all-bidders');

	Route::get('view-profile-info/{id}', ['uses' => 'UserController@viewProfileInfo', 'middleware' => 'auth'])->name('view-profile-info');

	Route::get('send-email/{id}', ['uses' => 'RegisteredMembersController@sendMail', 'middleware' => 'admin']);

	Route::post('post-mail', ['uses' => 'MailController@sendMail', 'Middleware' => 'admin'])->name('send-email');

// Password Reset Routes...
	Route::get('password-reset/{token?}', ['uses' => 'Auth\PasswordController@getPasswordReset'])->name('password-reset');

	Route::post('password-to-email', ['uses' => 'Auth\PasswordController@postPasswordResetLink'])->name('password-to-email');
});
