<?php

namespace App\Repo\Section;

use App\Models\Section;
use Exception;
use Illuminate\Support\Facades\DB;

class SectionService implements SectionInterface
{
    public function storeOrUpdate($request, $id=null)
    {
        $course_id = (int)$request['course_id'];
        try
        {
            $section = (new Section());
            DB::transaction(function () use ($section, $request, $course_id) {
                $section->title        =  $request['title'];
                $section->status       =  $request['status'];
                $section->course_id    =  $course_id;
                $section->save();
            });
            return true;
        }
        catch (Exception $ex)
        {
            return false;
        }
    }
}
