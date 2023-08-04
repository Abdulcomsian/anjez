<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class studentDashboardContrller extends Controller
{
    public function student_dashboard()
    {
        $courses = Course::with(['sections.lessons'=>
                [
                    'quizes',
                    'quiz_scores'
                ]
            ])
            ->whereStatus('Active')
            ->get();
        // foreach($courses as $course)
        // {
        //     foreach($course->sections as $section)
        //     {
        //         foreach($section->lessons as $lesson)
        //         {
        //             if(isset($lesson->quiz_scores))
        //             {
        //                 $taken_score = (int)($lesson->quiz_scores->score_taken);
        //                 $total_score = (int)($lesson->quiz_scores->total_score);
        //                 $progress =$taken_score+$total_score;
        //             }
        //         }
        //     }
        // }
        // dd($courses);
        $data =
        [
            'courses'   => $courses
        ];
        return view('frontend.studentdashboard.student-dashboard', compact('data'));
    }
}
