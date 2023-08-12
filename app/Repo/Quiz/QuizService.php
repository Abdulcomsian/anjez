<?php

namespace App\Repo\Quiz;

use App\Models\Quiz;
use App\Models\QuizOption;
use Exception;
use Illuminate\Support\Facades\DB;

class QuizService implements QuizInterface
{
    public function storeOrUpdate($data, $id)
    {
        try
        {
            if(isset($id))
            {
                $quiz = Quiz::find($id);
                $quiz_options  = QuizOption::where('quiz_id', $id)->first();
            }
            else
            {
                $quiz = new Quiz();
                $quiz_options = new QuizOption();
            }
            DB::transaction( function () use ($quiz, $quiz_options, $data) {
                $quiz->question             = $data['question'];
                $quiz->question_ar          = $data['question_ar'];
                $quiz->lesson_id            = (int)$data['lesson_id'];
                $quiz->save();

                $quiz_options->option1      = $data['option1'];
                $quiz_options->option2      = $data['option2'];
                $quiz_options->option3      = $data['option3'];
                $quiz_options->option4      = $data['option4'];
                $quiz_options->correct_answer=$data['correct_answer'];
                $quiz_options->correct_answer_description=$data['correct_answer_description'];
                $quiz_options->option1_ar      = $data['option1_ar'];
                $quiz_options->option2_ar      = $data['option2_ar'];
                $quiz_options->option3_ar      = $data['option3_ar'];
                $quiz_options->option4_ar      = $data['option4_ar'];
                $quiz_options->correct_answer_ar=$data['correct_answer_ar'];
                $quiz_options->correct_answer_description_ar=$data['correct_answer_description_ar'];
                $quiz_options->quiz_id      = $quiz->id;
                $quiz_options->save();
            });
            return $quiz;
        }
        catch (Exception $ex)
        {
            return $ex->getMessage();
        }
    }

    public function delete($id)
    {
        $quiz = Quiz::with('options')->find((int)$id);
        if(!is_null($quiz->options) && !empty($quiz->options))
        {
            $quiz->options->delete();
        }
        $is_delete = $quiz->delete();
        return $is_delete ? true : false;
    }

    public function edit ($id)
    {
        if(isset($id) && !empty($id))
        {
            $quiz = Quiz::with('options')->find($id);
            return $quiz;
        }
        else
        {
            return false;
        }
    }
}
