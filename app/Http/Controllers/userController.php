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

    public function index(Request $request)
    {
        if(isset($request['search']))
        {
            $search = $request->input('search');
            $users = User::join('payments', 'users.id', 'payments.user_id')->where('first_name','like', '%' . $search . '%')->get();
        }
        else
        {
            $users = User::latest()->get();
        }
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
            if($user){
                toastr()->success("User Created Successfully");
                return redirect()->back();            }
            else{
                toastr()->success("User Not Created");
                return redirect()->back();
            }

        }
        catch (Exception $ex)
        {
            return redirect()->back()->with('danger', $ex->getMessage());
        }
    }
}
