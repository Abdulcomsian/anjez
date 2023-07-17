<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Traits\Image;
use Exception;
use Illuminate\Support\Facades\File;

class LessonController extends Controller
{
    use Image;
    public function index($id)
    {
        $lessons = Lesson::where('section_id', $id)->withCount('quizes')->orderBy('id', 'desc')->get();
        return view('backend.lesson.index', compact('lessons', 'id'));
    }

    public function store(Request $request, $id)
    {
        try
        {
            $request->validate([
                'lesson.title' => 'required',
                'lesson.video_url' => 'required',
                'lesson.description' => 'required',
                'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $is_thumbnail = array_key_exists('thumbnail', $request->all());
            $lessonParam = $request->input('lesson');
            $title = $lessonParam['title'];
            $videoUrl = $lessonParam['video_url'];
            $description = $lessonParam['description'];

            if(isset($request['lesson_id']) && !empty($request['lesson_id']))
            {
                $lesson = Lesson::find($request['lesson_id']);
            }
            else
            {
                $lesson = new Lesson();
            }
            $lesson->title = $title;
            $lesson->video_url = $videoUrl;
            $lesson->description = $description;
            $lesson->section_id = $id;

            if($is_thumbnail)
            {
                $image = Lesson::PATH.$lesson->thumbnail;
                if(File::exists($image))
                {
                    File::delete($image);
                }
                $lesson->thumbnail = $this->storeImage(Lesson::PATH, $request['thumbnail'] ?? '');
            }
            $lesson->save();
            return empty($request['lesson_id']) ? redirect()->route('lessons.index', $id)->with('success', 'Lesson added successfully') : redirect()->route('lessons.index', $id)->with('success', 'Lesson Updatd successfully');
        }
        catch (\Exception $ex)
        {
            return redirect()->back()->with('danger', $ex->getMessage());
        }
    }

    public function delete ($id)
    {
        try
        {
            $id = (int)$id;
            $lesson = Lesson::with('quizes.options')->find($id);
            if(isset($lesson->quizes) && count($lesson->quizes)>0)
            {
                foreach($lesson->quizes as $quiz)
                {
                    if(isset($quiz->options) && !empty($quiz->options))
                    {
                        $quiz->options->delete();
                    }
                    $quiz->delete();
                }
                // if(isset($))
                // $lesson->quizes->each->delete(); //or use foreach loop
            }
            $image = Lesson::PATH.$lesson->thumbnail;
            if(File::exists($image));
                File::delete($image);
            $lesson->delete();
            return redirect()->back()->with('success', 'Lesson Deleted Successfully');
        }
        catch (Exception $ex) {
            return redirect()->back()->with('danger', 'Error'.$ex->getMessage());
        }
    }

    public function edit ($id)
    {
        $id = (int)$id;
        try
        {
            if(isset($id))
            {
                $lesson = Lesson::find($id);
                return apiSuccessResponse($lesson, "Data Found");
            }
        }
        catch (Exception $ex)
        {
            return apiErrorResponse($ex->getMessage(),"Something went wrong");
        }
    }

    public function getLessonQuizes ($id)
    {
        try
        {
            $lesson_quizes = Lesson::withCount('quizes')->where('id', $id)->first();
            $quiz_count = $lesson_quizes->quizes_count;
            return apiSuccessResponse(['quizes'=>$quiz_count], "Result");
        }
        catch (Exception $ex)
        {
            return apiErrorResponse($ex->getMessage(), "Error Occured");
        }

    }

}
