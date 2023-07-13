<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Repo\Quiz\QuizInterface;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public $quiz = '';
    public function __construct(QuizInterface $quizInterface)
    {
        $this->quiz = $quizInterface;
    }

    public function index($id)
    {
        $data =
        [
            'id'    => $id,
            'quizes'  => Quiz::where('lesson_id',$id)->get()
        ];
        return view('backend.quiz.index', compact('data'));
    }

    public function store(Request $request)
    {
        $validated_data = $this->validate($request,[
            'question'      => 'required',
            'option1'       => 'required',
            'option2'       => 'required',
            'option3'       => 'required',
            'option4'       => 'required',
            'correct_answer'=> 'required',
            'lesson_id'     =>'required|exists:lessons,id'
        ]);
        $quiz = $this->quiz->storeOrUpdate($validated_data, $id=null);
        if(isset($quiz) && !is_null($quiz))
            return redirect()->back()->with('success', 'Quiz Added Successfully');
        else
            return redirect()->back()->with('danger', 'Something went wrong');
    }
}
