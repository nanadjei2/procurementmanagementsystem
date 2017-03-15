<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    //

    public function getLogin(){

    	return view('pages.login');
    }


    public function Signup(){

    	return view('pages.signup');
    }
}
