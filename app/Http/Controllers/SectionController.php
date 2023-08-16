<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Repo\Section\SectionInterface;
use Exception;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public $section = '';
    public function __construct(SectionInterface $sectionInterface)
    {
        $this->section = $sectionInterface;
    }

    public function index($id)
    {
        $data =
        [
            'id'       => (int)$id,
            'sections' => Section::withCount('lessons')->where('course_id', $id)->get(),
        ];
        return view('backend.section.index', compact('data'));
    }

    public function store (Request $request)
    {
        $validated_data = $this->validate($request,[
            'title'=>'required',
            'status'=>'required',
            'title_ar'=>'required',
            'status_ar'=>'required',
            'course_id'=>'required|exists:courses,id'
        ]);
        $section = $this->section->storeOrUpdate($validated_data, $id=null);
        if($section)
            return redirect()->back()->with('success', 'Section Added Successfully');
        else
            return redirect()->back()->with('danger', 'Something went wrong');
    }

    public function edit ($id)
    {
        $section = $this->section->edit($id);
        if(isset($section))
        return apiSuccessResponse($section, "Data Found");
        else
        apiErrorResponse("", "Section Not Found");
    }

    public function update (Request $request)
    {
        $validated_data = $this->validate($request,[
            'title'=>'required',
            'status'=>'required',
            'title_ar'=>'required',
            'status_ar'=>'required',
            'section_id'=>'required|exists:sections,id',
            'course_id'=>'required|exists:courses,id'
        ]);
        $section = $this->section->storeOrUpdate($validated_data, $validated_data['section_id']);
        if($section)
            return redirect()->back()->with('success', 'Section Updated Successfully');
        else
            return redirect()->back()->with('danger', 'Something went wrong');
    }

    public function delete ($id)
    {
        try
        {
            $section = $this->section->delete($id);
            if($section)
                return redirect()->back()->with('success', 'Section Deleted Successfully');
            else
                return redirect()->back()->with('danger', 'Something went wrong');
        }
        catch (Exception $ex)
        {
            return redirect()->back()->with('danger', $ex->getMessage());
        }
    }
}
