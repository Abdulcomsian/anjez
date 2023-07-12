<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
// use App\Http\Controllers\toastError();

class LessonController extends Controller
{
    public function index($id)
    {
        $lessons = Lesson::where('section_id', $id)->get();
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
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = $thumbnail->store('thumbnails', 'public');
            $lesson->thumbnail = $thumbnailPath;
        }

        $lesson->save();

        return redirect()->route('lessons.index', $id)->with('success', 'Lesson added successfully');
    }catch (\Exception $exception) {
            // toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }


}
