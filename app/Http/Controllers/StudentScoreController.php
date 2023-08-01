<?php

namespace App\Http\Controllers;

use App\Models\StudentScore;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentScoreController extends Controller
{
    public function store(Request $request)
    {
        try
        {
            $student_score = new StudentScore();

            $student_score->lesson_id = $request->input('lesson_id');
            $student_score->user_id = Auth::user()->id;
            $student_score->score_taken = $request->input('score');
            $student_score->total_score = $request->input('total_score');
            $student_score->save();
            return apiSuccessResponse("", "Score Saved");

        } catch (Exception $ex)
        {
            return apiErrorResponse($ex->getMessage());
        }
    }
}
