<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function payments()
    {
        return view('frontend.payment');
    }
}
