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
        // return view('backend.admin-dashboard', compact('courses'));
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
        return view('courses.edit', compact('course'));
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

        //zeeshan rabnawaz code comment by zeeshan after refactoring i-e can be refactor more
        // $course->title = $request->input('title');
        // $course->price = $request->input('price');
        // $course->status = $request->input('status');
        // $course->description = $request->input('description');
        $course = Course::findOrFail($id);
        $course->title = $validatedData['title'];
        $course->price = $validatedData['price'];
        $course->status = $validatedData['status'];
        $course->description = $validatedData['description'];
        $course->user_id = auth()->user()->id;
        $image = Course::PATH.$course->feature_image;
        if(File::exists($image))
        {
            $delete_file = File::delete($image);
            if($delete_file)
                $course->feature_image = $this->storeImage(Course::PATH, $validatedData['feature_image'] ?? '');
        }

        // if ($request->hasFile('feature_image')) {
        //     $image = $request->file('feature_image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('images'), $imageName);
        //     $course->feature_image = $imageName;
        // }

        $course->save();

        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        //Zeeshan TT code
        $feature_image = Course::PATH.$course['feature_image'];
        if(File::exists($feature_image))
        {
            File::delete($feature_image);
        }
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }

    public function test()
    {
        return view('backend.courses.index');
    }
}

