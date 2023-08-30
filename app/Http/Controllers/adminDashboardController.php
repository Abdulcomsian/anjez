<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class adminDashboardController extends Controller
{

    public function AdminDashboard()
    {
        $data =
        [
            'students'  => User::where('type', 'Student')->count(),
            'courses'   => Course::count(),
            'total_subscribers'   => Payment::count(),
        ];
        return view('backend.admindashboard.admin-index', compact('data'));
    }
}
