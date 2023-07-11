<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        // dd("test");
        // $courses = Course::all();
        return view('backend.courses.index');
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
            // 'feature_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
// dd($request->input('status'));
        $course = new Course;
        $course->title = $request->input('title');
        $course->price = $request->input('price');
        $course->status = $request->input('status');
        $course->description = $request->input('description');

        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('course_content/courses'), $imageName);
            $course->feature_image = $imageName;
        }

        // Assuming you have an authenticated user
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

        $course = Course::findOrFail($id);
        $course->title = $request->input('title');
        $course->price = $request->input('price');
        $course->status = $request->input('status');
        $course->description = $request->input('description');

        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $course->feature_image = $imageName;
        }

        $course->save();

        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }

    public function test()
    {
        return view('backend.courses.index');
    }
}

