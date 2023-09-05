<?php

namespace App\Http\Controllers;

use App\Repo\Auth\AuthInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    protected $auth_service = '';

    public function __construct(AuthInterface $authInterface)
    {
        $this->auth_service = $authInterface;
    }

    public function create()
    {
        return view('auth.login');
    }

    public function forgetPassword()
    {
        return view('auth.forgetPassword');
    }

    public function login(Request $request)
    {
        $login = $this->auth_service->login($request->all());
        if ($login) {
            // toastr()->success("Account created successfully!");
            return redirect()->route('admindashboard.admin-index');
        } else {
            toastr()->error("Email or password incorrect!");
            return redirect()->back();
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
