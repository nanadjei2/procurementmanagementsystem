<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;
use App\User;
use Auth;
use App\RegisteredMember;

class RegisteredMembersController extends Controller
{
    public function RegisterNewMember(){

    	return view('pages.registration');
    }


    public function PostRegisterNewMember(Request $request){

            $this->validate($request,[

                'jobtitile'=>'required',
                'directorname'=>'required',
                'postaladdress'=>'required',
                'businessaddress'=>'required',
                'region'=>'required',
                'email'=>'email|required',
                'companywebsite'=>'required',
                'activephone'=>'required',
                'bankdraftnumber'=>'required',
                'companymajoractivity'=>'required'


                ]);

    		$RegisteredMember= new RegisteredMember;
    		$RegisteredMember->user_id=Auth::user()->id;
    		$RegisteredMember->job_title=$request['jobtitile'];
    		$RegisteredMember->directorname=$request['directorname'];
    		$RegisteredMember->postaladdress=$request['postaladdress'];
    		$RegisteredMember->businessaddress=$request['businessaddress'];
    		$RegisteredMember->region=$request['region'];
    		$RegisteredMember->email=$request['email'];
    		$RegisteredMember->companywebsite=$request['companywebsite'];
    		$RegisteredMember->activephone=$request['activephone'];
    		$RegisteredMember->phonenumberone=$request['phonenumberone'];
    		$RegisteredMember->phonenumbertwo=$request['phonenumbertwo'];
    		$RegisteredMember->bankdraftnumber=$request['bankdraftnumber'];
    		$RegisteredMember->companywebsite=$request['companymajoractivity'];
    		$RegisteredMember->companywebsite=$request['companyotheractivities'];

    		dd($RegisteredMember);
    		//$RegisteredMember->save();


    }


}
