<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    //

    public function getLogin(){

    	return view('pages.login');
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
