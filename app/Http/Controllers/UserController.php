<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RegisteredMember;
use App\Http\Requests;
use Validator;
use App\User;
use Auth;

class UserController extends Controller
{
    //

    public function getLogin(){

    	return view('pages.login');
    }

    public function getDashboard() {

        return view('pages.dashboard');
    }

    public function viewProfileInfo($id) {
        $user = User::findOrFail($id);
        return view('pages.view-profile-info')->with('user', $user);
    }

   

    // public function supplierResgistration() {
    //     return view('pages.registration');
    // }

    public function postLogin(Request $requset) {
       $rules = User::$rules;
    //    
        $credentials = [
         'username'    => $requset->input('username'),
         'password' => $requset->input('password')
        ];

       $validator = Validator::make($credentials, $rules);


       if (Auth::attempt($credentials)) {
           if(!Auth::user()->admin == 1) {
            return redirect('dashboard')
            ->with('notify-success', 'You have successfully logged in');
           } else {
            return redirect('admin-dashboard')
            ->with('notify-success', 'Hi '. Auth::user()->username .', You are welcome');
           }
         
       } else {
         return redirect()->back()
         ->with('icon-error', 'Sorry username and password mismatch');
       }
        
    }

    public function Signup(){

    	return view('pages.signup');
    }


    public function PostSignup(Request $request){

    	  $this->validate($request, [
                'firstname'=>'required',
                'othernames'=>'required',
    	  		'username'=>'required',
    	  		'email'=>'email',
    	  		'password'=>'required|min:8',
    	  		'confirmpassword'=>'required|min:8'


    	  	]);

    	$newSignup= new User;  // creates a new user object
        $newSignup->firstname=$request['firstname'];
        $newSignup->othernames=$request['othernames'];
    	$newSignup->username=$request['username']; // accepts username from textbox
    	$newSignup->email=$request['email'];// accepts email from textbox
    	$newSignup->password=bcrypt($request['password']); // accepts password from textbox
    	$password=$request['password'];// accepts password from textbox and compare with confirm password 
    	$confirmpassword=$request['confirmpassword'];// accept confirm password from textbox
    	$newSignup->admin=0;// set admin privilege to 0

    	if($confirmpassword==$password){  // do comparision if two password matches

    		$newSignup->save();// creates a new user entry
    		return redirect('admin-dashboard')->with('success', 'You have successfully signed up');//message after signup
    	}

    	else{

    		return redirect()->back()->with('error','password mismatch found!');
    	}

    		
    }



    public function postAdmin() {

        $newAdmin = new User; 
        $newAdmin->firstname = '';
        $newAdmin->lastname = '';
        $newAdmin->username = 'bill';
        $newAdmin->email = 'g.bill@rocketmail.com';
        $newAdmin->password = bcrypt('elvis0266266828');
        $newAdmin->admin = 0;
        $newAdmin->save();


        if($newAdmin) {
            echo 'New Admin Signed in Successfully';
        } else {
            echo 'Sorry something happend';
        }
    }


    public function logout() {
        if(Auth::check()) {
            Auth::logout();
            return redirect('/')->with('success', 'You have successfully logged out');
        } else {
            return redirect('dashboard')->with('error', 'Sorry you have to login first.');
        }
    }


    public function viewAll() {
        return view('pages.admin-view-all-bidders');
    }



}
