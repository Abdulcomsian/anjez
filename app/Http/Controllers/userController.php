<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repo\User\UserInterface;
use Exception;
use Illuminate\Http\Request;

class userController extends Controller
{
    public $user = '';
    public function __construct(UserInterface $userInterface)
    {
        $this->user = $userInterface;
    }

    public function index()
    {
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    public function create()
    {
        return view('backend.users.add-user');
    }

    public function store (Request $request)
    {
        try
        {
            $validated_data = $this->validate($request,[
                'first_name'=> '',
                'last_name' => '',
                'email'     => 'required|email',
                'phone_no'  => 'required|numeric',
                'password'  => 'required'
            ]);
            $user = $this->user->store($validated_data);
            if($user)
                return redirect()->back()->with('success', 'Course deleted successfully');
            else
                return redirect()->back()->with('danger', 'User Not Created');

        }
        catch (Exception $ex)
        {
            return redirect()->back()->with('danger', $ex->getMessage());
        }
    }
}
