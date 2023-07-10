<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentDashboardContrller extends Controller
{
    public function studentDashboard()
    {
        return view('frontend.student-dashboard');
    }
}
