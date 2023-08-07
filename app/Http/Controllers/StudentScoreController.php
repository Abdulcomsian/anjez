<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\StudentScore;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentScoreController extends Controller
{
    public function store(Request $request)
    {
        $lesson_id = (int)$request->input('lesson_id');
        try
        {
            $student_score = new StudentScore();

            $student_score->lesson_id = $lesson_id;
            $student_score->user_id = Auth::user()->id;
            $student_score->score_taken = $request->input('score');
            $student_score->total_score = $request->input('total_score');
            $student_score->save();

            if($student_score->score_taken == $student_score->total_score)
            {
                self::markAsRead($lesson_id);
            }
            return apiSuccessResponse("", "Score Saved");

        }
        catch (Exception $ex)
        {
            return apiErrorResponse($ex->getMessage());
        }
    }

    public static function markAsRead($lesson_id)
    {
        $lesson = Lesson::find($lesson_id);
        $lesson->is_complete = 1;
        $lesson->save();
    }

    public function lessonMarkAsRead($lesson_id)
    {
        self::markAsRead($lesson_id);
        return redirect()->back()->withSuccess('Lesson Read');
    }
}
