<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use App\Traits\Image;
use Exception;
use Illuminate\Support\Facades\File;


class CourseController extends Controller
{
    use Image;

    public function index()
    {
        $courses = Course::withCount('sections')->where('user_id', auth()->user()->id)->get();
        return view('backend.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('backend.courses.add-course');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'status' => 'required',
            'description' => 'required',
            'title_ar' => 'required',
            'price_ar' => 'required',
            'status_ar' => 'required',
            'description_ar' => 'required',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $course = new Course();
        $course->title = $validatedData['title'];
        $course->price = $validatedData['price'];
        $course->status = $validatedData['status'];
        $course->description = $validatedData['description'];
        $course->title_ar = $validatedData['title_ar'];
        $course->price_ar = $validatedData['price_ar'];
        $course->status_ar = $validatedData['status_ar'];
        $course->description_ar = $validatedData['description_ar'];
        $course->feature_image = $this->storeImage(Course::PATH, $validatedData['feature_image'] ?? '');
        $course->user_id = auth()->user()->id;
        $course->save();
        return redirect()->route('courses.index')->with('success', 'Course added successfully');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('backend.courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'status' => 'required',
            'description' => 'required',
            'title_ar' => 'required',
            'price_ar' => 'required',
            'status_ar' => 'required',
            'description_ar' => 'required',
            'feature_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $course = Course::findOrFail($id);
        $course->title = $validatedData['title'];
        $course->price = $validatedData['price'];
        $course->status = $validatedData['status'];
        $course->description = $validatedData['description'];
        $course->title_ar = $validatedData['title_ar'];
        $course->price_ar = $validatedData['price_ar'];
        $course->status_ar = $validatedData['status_ar'];
        $course->description_ar = $validatedData['description_ar'];
        $course->user_id = auth()->user()->id;

        $imagePath = public_path('assets/courses-content/course-images') . '/' . $course->feature_image;
        if ($request->hasFile('feature_image'))
        {
            if (File::exists($imagePath))
            {
                File::delete($imagePath);
            }
            $image = $request->file('feature_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/courses-content/course-images'), $imageName);
            $course->feature_image = $imageName;
        }
        $course->save();
        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }

    public function destroy($id)
    {
        try
        {
            $course = Course::with('sections.lessons.quizes.options')->findOrFail($id);
            if(count($course->sections)>0 || isset($course->sections))
            {
                foreach($course->sections as $section)
                {
                    if(count($section->lessons)>0 || isset($section->lessons))
                    {
                        foreach($section->lessons as $lesson)
                        {
                            if(count($lesson->quizes)>0 || isset($lesson->quizes))
                            {
                                foreach($lesson->quizes as $quiz)
                                {
                                    if(isset($quiz->options) || !empty($quiz->options))
                                    {
                                        $quiz->options->delete();
                                    }
                                    $quiz->delete();
                                }
                            }
                            $file = Lesson::PATH.$lesson->thumbnail;
                            if(File::exists($file))
                            {
                                File::delete($file);
                            }
                            $lesson->delete();
                        }
                    }
                    $section->delete();
                }
                $imagePath = public_path('assets/courses-content/course-images') . '/' . $course->feature_image;
                if (File::exists($imagePath))
                {
                    File::delete($imagePath);
                }
                $course->delete();
            }
            return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
            //code...
        }
        catch (Exception $ex)
        {
            dd($ex->getMessage());
        }
    }

}


