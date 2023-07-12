<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        return view('backend.users.index');
    }

    public function create()
    {
        return view('backend.users.add-user');
    }
}
