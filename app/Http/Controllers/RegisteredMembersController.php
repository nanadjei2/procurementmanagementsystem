<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;
use App\User;
use Auth;
use RegisteredMember;

class RegisteredMembersController extends Controller
{
    public function RegisterNewMember(){

    	return view('pages.registration');
    }
}
