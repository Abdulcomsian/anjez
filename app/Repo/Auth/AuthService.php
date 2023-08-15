<?php

namespace App\Repo\Auth;

use App\Events\VerificationEvent;
use App\Models\User;
use App\Models\UserVerification;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthService implements AuthInterface
{
    public function signupUser($request)
    {
        try
        {
            $country_code = countryCode($request['phone_no']);
            $user               = new User();
            DB::transaction(function () use ($request, $country_code, $user) {
                $token = token();
                $user->first_name   = $request['first_name'] ?? null;
                $user->last_name    = $request['last_name'] ?? null;
                $user->email        = $request['email'] ?? null;
                $user->country_code = $country_code ?? null;
                $user->phone_no     = $request['phone_no'] ?? null;
                $user->password     = Hash::make($request['password']);
                $user->type         = "Student" ?? null;
                $user->save();

                $user_verification = new UserVerification();
                $user_verification->user_id = $user->id;
                $user_verification->token = $token;
                $user_verification->save();
                event(new VerificationEvent($user->email, $token));
            });
            return $user;
        }
        catch (Exception $ex)
        {
            return false;
        }
    }

    public function login ($request)
    {
        if(isset($request['email']))
        {
            $credientials =
            [
                'email' => $request['email'],
                'password' => $request['password'],
            ];
        }
        else
        {
            $credientials =
            [
                'phone_no' => $request['phone_no'],
                'password' => $request['password'],
            ];
        }
        return (Auth::attempt($credientials) ? true : false);
    }

}
