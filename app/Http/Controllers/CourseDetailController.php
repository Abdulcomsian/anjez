<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Helpers\Helper;

class CourseDetailController extends Controller
{
    public function courseDetails(Request $request, $id)
    {
        // ->where('title', 'like', '%' . $request->input('search') . '%'),

        $id = (int)decryptParams($id);
        $course = Course::with('sections.lessons.quiz_scores')->whereStatus('Active')->find($id);
        $courses = Course::with('sections.lessons.quiz_scores')->whereStatus('Active')->get();
        $is_payment_active = Helper::isPaymentActive();
        $data =
        [
            'course'    =>  $course,
            'courses'   =>  $courses,
            'is_payment_active' => $is_payment_active
        ];
        return view('frontend.studentdashboard.layouts.course.course-detail', compact('data'));
    }
}
