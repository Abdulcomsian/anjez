<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentContentController extends Controller
{
    public function studentcontent()
    {
        return view('frontend.student-content');
    }
}
