<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Repo\Quiz\QuizInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        // dd( $request);
        
        $validated_data = $this->validate($request,[
            'question'      => 'required',
            'option1'       => 'required',
            'option2'       => 'required',
            'option3'       => 'required',
            'option4'       => 'required',
            'correct_answer' => 'required',Rule::in('option1','option2','option3','option4'),
            'correct_answer_description'=> 'required',
            'question_ar'      => 'required',
            'option1_ar'       => 'required',
            'option2_ar'       => 'required',
            'option3_ar'       => 'required',
            'option4_ar'       => 'required',
            'correct_answer_ar'=> 'required',Rule::in('option1_ar','option2_ar','option3_ar','option4_ar'),
            'correct_answer_description_ar'=> 'required',
            'lesson_id'     =>'required|exists:lessons,id',
            'quiz_id'       =>'nullable|exists:quizzes,id',
        ]);

        if(isset($validated_data['quiz_id']) && !empty($validated_data['quiz_id']))
        {
            try
            {
                $quiz = $this->quiz->storeOrUpdate($validated_data, $validated_data['quiz_id']);
                if(isset($quiz) && !is_null($quiz))
                    return redirect()->back()->with('success', 'Quiz Updated Successfully');
                else
                    return redirect()->back()->with('danger', 'Something went wrong');
            }
            catch (Exception $ex)
            {
                return redirect()->back()->with('danger', $ex->getMessage());
            }
        }
        else
        {
            try
            {
                $quiz = $this->quiz->storeOrUpdate($validated_data, $id=null);
                if(isset($quiz) && !is_null($quiz))
                    return redirect()->back()->with('success', 'Quiz Added Successfully');
                else
                    return redirect()->back()->with('error', 'Something went wrong');
            }
            catch (Exception $ex)
            {
                return redirect()->back()->with('danger', $ex->getMessage());
            }
        }
    }

    public function delete ($id)
    {
        try
        {
            $quiz = $this->quiz->delete($id);
            if($quiz)
                return redirect()->back()->with('success', 'Quiz Deleted Successfully');
            else
                return redirect()->back()->with('danger', 'Quiz Not Deleted');
        }
        catch (Exception $ex)
        {
            return redirect()->back()->with('danger', $ex->getMessage());
        }
    }

    public function edit ($id)
    {
        try
        {
            $quiz = $this->quiz->edit((int)$id);
            if($quiz)
                return apiSuccessResponse($quiz, "Quiz Found");
            else
                return apiErrorResponse("", "Quiz Not Found");
        }
        catch (\Exception $ex)
        {
            return apiErrorResponse($ex->getMessage(), "Quiz Not Found");
        }
    }

    public function update(Request $request)
    {
        try
        {
            $validated_data = $this->validate($request,[
                'question'      => 'required',
                'option1'       => 'required',
                'option2'       => 'required',
                'option3'       => 'required',
                'option4'       => 'required',
                'correct_answer'=> 'required',
                'correct_answer_description'=> 'required',
                'question_ar'      => 'required',
                'option1_ar'       => 'required',
                'option2_ar'       => 'required',
                'option3_ar'       => 'required',
                'option4_ar'       => 'required',
                'correct_answer_ar'=> 'required',
                'correct_answer_description_ar'=> 'required',
                'lesson_id'     =>'required|exists:lessons,id',
                'quiz_id'       =>'required|exists:quizzes,id',
            ]);
            $quiz = $this->quiz->storeOrUpdate($validated_data, $validated_data['quiz_id']);
            if(isset($quiz) && !is_null($quiz))
                return redirect()->back()->with('success', 'Quiz Updated Successfully');
            else
                return redirect()->back()->with('danger', 'Something went wrong');
        }
        catch (Exception $ex)
        {
            return redirect()->back()->with('danger', $ex->getMessage());
        }
    }
}

