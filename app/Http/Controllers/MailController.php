<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

use App\User;

use Input as Input;

use Mail;

class MailController extends Controller
{
    public function sendMail(Request $request) {
    	$rules = User::$mailRules;

    	$data = [
    		'email' =>  $request->input('email'),
    		'subject' => $request->input('subject'),
    		'message' => $request->input('message')
    	];

		

    	 $validator = Validator::make($request->all(), $rules);
		//$this->validate($request->all(), $rules);

    	if ($validator->fails()) {
    		return "Could not send mail";
    	} else {
			Mail::send('emails.send', $data, function($message) use ($data) {
				$message->from('procuremansys@gmail.com')
						->to($data["email"])
						->subject($data["message"]);
			});

			return "Email successfully sent"; 
		}
    }
}
