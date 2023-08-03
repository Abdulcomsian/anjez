<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseDetailController extends Controller
{
    public function courseDetails($id)
    {
        $id = (int)decryptParams($id);
        $data =
        [
            'course'    =>  Course::with('sections.lessons.quiz_scores')->find($id),
            'courses'   => Course::with('sections.lessons.quiz_scores')->get()
        ];
        return view('frontend.studentdashboard.layouts.course.course-detail', compact('data'));
    }
}
