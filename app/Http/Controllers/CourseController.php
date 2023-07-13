<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Traits\Image;
use Illuminate\Support\Facades\File;


class CourseController extends Controller
{
    use Image;

    public function index()
    {
        $courses = Course::all();
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
            'feature_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $course = new Course();
        $course->title = $validatedData['title'];
        $course->price = $validatedData['price'];
        $course->status = $validatedData['status'];
        $course->description = $validatedData['description'];
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
            'feature_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $course = Course::findOrFail($id);
        $course->title = $validatedData['title'];
        $course->price = $validatedData['price'];
        $course->status = $validatedData['status'];
        $course->description = $validatedData['description'];
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
        $course = Course::findOrFail($id);

        // Delete associated data (if any) before deleting the course
        // For example, if there is a relationship with sections, you can delete them like this:
        // $course->sections()->delete();

        $imagePath = public_path('assets/courses-content/course-images') . '/' . $course->feature_image;
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }

}


