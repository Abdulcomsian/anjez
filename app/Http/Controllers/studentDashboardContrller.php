<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


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

    public function studentProfile()
    {
        return view('frontend.student_profile');
    }

    public function studentProfileUpdate(Request $request)
    {
        // Validate the input data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8', // Optional password field
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Update the user's profile
        $user = Auth::user();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');

        // Check if a new password was provided
        if ($request->has('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
