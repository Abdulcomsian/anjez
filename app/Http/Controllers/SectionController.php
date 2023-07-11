<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index ($id)
    {
        $id = (int)$id;
        return view('backend.section.index');
    }
}
