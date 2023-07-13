<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Traits\Image;
use Exception;
use Illuminate\Support\Facades\File;

// use App\Http\Controllers\toastError();

class LessonController extends Controller
{
    use Image;
    public function index($id)
    {
        $lessons = Lesson::where('section_id', $id)->orderBy('id', 'desc')->get();
        return view('backend.lesson.index', compact('lessons', 'id'));
    }

    public function store(Request $request, $id)
    {

try{
    $request->validate([
        'lesson.title' => 'required',
        'lesson.video_url' => 'required',
        'lesson.description' => 'required',
        'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
        $lessonParam = $request->input('lesson');

        // Retrieve the values from the lesson parameter
        $title = $lessonParam['title'];
        $videoUrl = $lessonParam['video_url'];
        $description = $lessonParam['description'];
        // $thumbnail = $lessonParam['thumbnail'];

        // Rest of your code to create a new Lesson instance
        $lesson = new Lesson;
        $lesson->title = $title;
        $lesson->video_url = $videoUrl;
        $lesson->description = $description;
        // $lesson->thumbnail = $thumbnail;
        $lesson->section_id = $id;

        // Thumbnail handling code
        // if ($request->hasFile('thumbnail')) {
        //     $thumbnail = $request->file('thumbnail');
        //     $thumbnailPath = $thumbnail->store('thumbnails', 'public');
        //     $lesson->thumbnail = $thumbnailPath;
        // }
        $lesson->thumbnail = $this->storeImage(Lesson::PATH, $request['thumbnail'] ?? '');
        $lesson->save();

        return redirect()->route('lessons.index', $id)->with('success', 'Lesson added successfully');
    }catch (\Exception $exception) {
            // toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }

    public function delete ($id)
    {
        try
        {
            $id = (int)$id;
            $lesson = Lesson::find($id);
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

}
