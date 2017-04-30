<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getPasswordReset() {
        return view('pages.password-reset');
    }

    public function postPasswordResetLink() {
        $rules = User::$passwordResetMailRules;

    	$data = [
    		'email' =>  $request->input('email'),
    	];

		

    	 $validator = Validator::make($request->all(), $rules);
		//$this->validate($request->all(), $rules);

    	if ($validator->fails()) {
    		return "Could not send mail";
    	} else {
			Mail::send('emails.password-reset', $data, function($message) use ($data) {
				$message->from('procuremansys@gmail.com')
						->to($data["email"])
						->subject("Reset your password");
			});

			return "Email successfully sent"; 
		}
    }

}
