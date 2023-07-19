<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class studentDashboardContrller extends Controller
{
    public function student_dashboard()
    {
        $data =
        [
            'courses'   => Course::whereStatus('Active')->get()
        ];
        return view('frontend.studentdashboard.student-dashboard', compact('data'));
    }
}
