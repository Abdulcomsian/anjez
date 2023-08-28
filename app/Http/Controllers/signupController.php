<?php

namespace App\Http\Controllers;

use App\Repo\Auth\AuthInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $validator = Validator::make($request->all(), [
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|unique:users',
            'phone_no'=>'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'type'  => 'Student'
        ]);
        if ($validator->fails()) {
            toastr()->error("Validation Error, Please try again!");
            return redirect()->back();
        }
        else{
            $country_code = countryCode($request['phone_no']);
            $user               = new User();
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
            toastr()->success("Account created successfully!");
            return redirect()->route('login');
            // $sign_user = $this->auth_service->signupUser($validator);
            // if($sign_user){
            //     toastr()->success("Account created successfully!");
            //     return redirect()->route('login');
            // }
            // else{
            //     toastr()->success("Something went wrong");
            //     return redirect()->back()->with('error', 'Something went wrong!');
            // }
        }
    }
}
