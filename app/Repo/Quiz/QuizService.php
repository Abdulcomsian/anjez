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
                $quiz = Quiz::find($id);
            else
                $quiz = new Quiz();
            DB::transaction( function () use ($quiz, $data) {
                $quiz->question             = $data['question'];
                $quiz->correct_answer       = $data['correct_answer'];
                $quiz->lesson_id            = (int)$data['lesson_id'];
                $quiz->save();

                $quiz_options               = new QuizOption();
                $quiz_options->option1      = $data['option1'];
                $quiz_options->option2      = $data['option2'];
                $quiz_options->option3      = $data['option3'];
                $quiz_options->option4      = $data['option4'];
                $quiz_options->quiz_id      = $quiz->id;
                $quiz_options->save();
            });
            return $quiz;
        }
        catch (Exception $ex)
        {
            return null;
        }
    }
}
