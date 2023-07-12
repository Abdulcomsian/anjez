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
            $section = Section::find((int)$id)->delete();
            return $section;
        }
        catch (Exception $ex)
        {
            return apiErrorResponse("", "Section Not Found");
        }
    }
}
