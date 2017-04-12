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

            // $this->validate($request,[

            //     'jobtitile'=>'required',
            //     'directorname'=>'required',
            //     'postaladdress'=>'required',
            //     'businessaddress'=>'required',
            //     'region'=>'required',
            //     'email'=>'email|required',
            //     'companywebsite'=>'required',
            //     'activephone'=>'required',
            //     'bankdraftnumber'=>'required',
            //     'companymajoractivity'=>'required'


            //     ]);

    		$RegisteredMember= new RegisteredMember;
    		$RegisteredMember->user_id=Auth::user()->id;
    		$RegisteredMember->job_title=$request['jobtitile'];
    		$RegisteredMember->name_of_director=$request['directorname'];
            $RegisteredMember->company_name=$request['companyname'];
    		$RegisteredMember->postal_address=$request['postaladdress'];
    		$RegisteredMember->business_address_or_location=$request['businessaddress'];
    		$RegisteredMember->region=$request['region'];
    		$RegisteredMember->company_email=$request['email'];
    		$RegisteredMember->company_website=$request['companywebsite'];
    		$RegisteredMember->company_active_phone=$request['activephone'];
    		$RegisteredMember->company_phone_two=$request['phonenumberone'];
            $RegisteredMember->company_phone_three=$request['phonenumbertwo'];
    		$RegisteredMember->bank_draft_number=$request['bankdraftnumber'];
    		$RegisteredMember->major_activity_category=$request['majoractivitycategory'];
    		$RegisteredMember->company_major_activitygoods=$request['companymajoractivitygoods'];
            $RegisteredMember->company_major_activityworks=$request['companymajoractivityworks'];
            $RegisteredMember->company_major_activityservices=$request['companymajoractivityservices'];

            $RegisteredMember->minor_activity1_category=$request['minoractivity1category'];
            $RegisteredMember->company_minor_activity1goods=$request['companyminoractivity1goods'];
            $RegisteredMember->company_minor_activity1services=$request['companyminoractivity1services'];
            $RegisteredMember->company_minor_activity1works=$request['companyminoractivity1works'];

            $RegisteredMember->minor_activity2_category=$request['minoractivity2category'];
            $RegisteredMember->company_minor_activity2goods=$request['companyminoractivity2goods'];
            $RegisteredMember->company_minor_activity2services=$request['companyminoractivity2services'];
            $RegisteredMember->company_minor_activity2works=$request['companyminoractivity2works'];

    		//dd($RegisteredMember);
    		$RegisteredMember->save();

            return redirect('register-member')->with('success','Bidder Information Added Successfully to database!');


    }

    public function sendMail($id) {
         $RegisterMember = RegisteredMember::findOrFail($id);
        return view('pages.send-email')->with("RegisterMember", $RegisterMember);
    }


}
