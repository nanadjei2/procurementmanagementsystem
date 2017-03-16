<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function postLogin(Request $requset) {
       $rules = User::$rules;
    //    
        $credentials = [
         'username'    => $requset->input('username'),
         'password' => $requset->input('password')
        ];

       $validator = Validator::make($credentials, $rules);


       if (Auth::attempt($credentials)) {
         return redirect('dashboard')->with('success', 'You have successfully logged in');
       } else {
         return 'Sorry looks like something went wrong. Please try again';
       }
        
    }

    public function Signup(){

    	return view('pages.signup');
    }

    public function postAdmin() {

        $newAdmin = new User;
        $newAdmin->username = 'nanadjei2';
        $newAdmin->email = 'nana.elvee@gmail.com';
        $newAdmin->password = bcrypt('elvis0266266828');
        $newAdmin->admin = 1;
        $newAdmin->save();


        if($newAdmin) {
            echo 'New Admin Signed in Successfully';
        } else {
            echo 'Sorry something happend';
        }
    }
}
