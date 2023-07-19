<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseDetailController extends Controller
{
    public function courseDetails($id)
    {
        $id = (int)$id;
        $data =
        [
            'course'    =>  Course::with('sections.lessons')->find($id),
            'courses'   => Course::with('sections.lessons')->get()
        ];
        return view('frontend.studentdashboard.layouts.course.course-detail', compact('data'));
    }
}
