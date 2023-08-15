<?php

namespace App\Http\Controllers;

use App\Models\UserVerification;

class UserVerificationController extends Controller
{
    public function verifyAccount($token)
    {
        $verify_user = UserVerification::where('token', $token)->first();
        if(!is_null($verify_user) )
        {
            $user = $verify_user->user;

            if(!$user->is_verified)
            {
                $verify_user->user->is_verified = 1;
                $verify_user->user->save();
                return redirect()->route('login')->withSuccess('Your e-mail is verified. You can now login');
            }
            else
            {
                return redirect()->route('login')->withDanger("Invalid Token");
            }
        }
    }
}
