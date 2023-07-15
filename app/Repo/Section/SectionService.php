<?php

namespace App\Repo\Section;

use App\Models\Section;
use Exception;
use Illuminate\Support\Facades\DB;
use Random\Engine\Secure;

class SectionService implements SectionInterface
{
    public function storeOrUpdate($request, $id)
    {
        $course_id = (int)$request['course_id'];
        try
        {
            if(isset($id))
                $section = Section::find($id);
            else
                $section = (new Section());
            DB::transaction(function () use ($section, $request, $course_id) {
                $section->title        =  $request['title'];
                $section->status       =  $request['status'];
                $section->course_id    =  $course_id;
                $section->save();
            });
            return $section;
        }
        catch (Exception $ex)
        {
            return false;
        }
    }

    public function edit($id)
    {
        try
        {
            if(isset($id) && $id>0)
            {
                $section = Section::find($id);
                return $section;
            }
        }
        catch (Exception $ex)
        {
            return apiErrorResponse($ex->getMessage());
        }
    }

    public function delete($id)
    {
        try
        {
            $section = Section::with('lessons.quizes.options')->find((int)$id);
            if(count($section->lessons)>0)
            {
                foreach($section->lessons as $lesson)
                {
                    // dd($lesson);
                    // dd($lesson->delete());
                    if(count($lesson->quizes)>0)
                    {
                        foreach($lesson->quizes as $quiz)
                        {
                            if(!empty($quiz->options) || isset($quiz->options))
                            {
                                // $quiz->options->delete();
                            }
                            // $quiz->delete();
                        }
                    }
                    $lesson->delete();
                }
            }
            return $section->delete();
        }
        catch (Exception $ex)
        {
            return apiErrorResponse("Error", $ex->getMessage());
        }
    }
}
