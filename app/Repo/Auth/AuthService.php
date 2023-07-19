<?php

namespace App\Repo\Auth;

use App\Models\User;
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
            DB::transaction(function () use ($request, $country_code) {
                $user               = new User();
                $user->first_name   = $request['first_name'] ?? null;
                $user->last_name    = $request['last_name'] ?? null;
                $user->email        = $request['email'] ?? null;
                $user->country_code = $country_code ?? null;
                $user->phone_no     = $request['phone_no'] ?? null;
                $user->password     = Hash::make($request['password']);
                $user->type         = "Student" ?? null;
                $user->save();
            });
            return true;
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
