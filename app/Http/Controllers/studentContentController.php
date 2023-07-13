<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentContentController extends Controller
{
    public function student_content()
    {
        return view('frontend.studentcontent.student-content');
    }
}
