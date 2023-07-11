<?php

namespace App\Http\Controllers;

use App\Repo\Auth\AuthInterface;
use Illuminate\Http\Request;

class signupController extends Controller
{

    protected $auth_service = '';
    public function __construct(AuthInterface $authInterface)
    {
        $this->auth_service = $authInterface;
    }

    public function create()
    {
        return view('auth.register');
    }

    public function signupUser (Request $request)
    {
        $validated_data = $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'phone_no'=>'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        if($validated_data)
        {
            $sign_user = $this->auth_service->signupUser($validated_data);
            if($sign_user)
                return redirect()->route('login')->with('message','User Added Successfully');
            else
                return redirect()->back()->with('error', 'Something went wrong');
        }
        else
            return redirect()->back()->with('error', "Validation Error");
    }
}
