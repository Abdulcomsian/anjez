<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentDashboardContrller extends Controller
{
    public function student_dashboard()
    {
        return view('frontend.studentdashboard.student-dashboard');
    }
}
