<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Section;
use App\Repo\Section\SectionInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;

class SectionController extends Controller
{

    public $section = '';
    public function __construct(SectionInterface $sectionInterface)
    {
        $this->section = $sectionInterface;
    }

    public function index ($id)
    {
        $data =
        [
            'id'       => (int)$id,
            'sections' => Section::with('course:id,title')->where('course_id', $id)->get(),
        ];
        return view('backend.section.index', compact('data'));
    }

    public function store (Request $request)
    {
        $validated_data = $this->validate($request,[
            'title'=>'required',
            'status'=>'required',
            'course_id'=>'required|exists:courses,id'
        ]);
        $section = $this->section->storeOrUpdate($validated_data, $id=null);
        if($section)
            return redirect()->back()->with('success', 'Section Added Successfully');
        else
            return redirect()->back()->with('danger', 'Something went wrong');
    }
}
