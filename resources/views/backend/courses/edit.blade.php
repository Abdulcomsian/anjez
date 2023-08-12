@extends('backend.layouts.main')

@section('content')
<div class="user mt-5 pb-5" id="add-course">
    <div class="container">
        <div class="row">
            <div class="col mt-4 d-flex justify-content-start">
                <div class="row d-flex flex-column">
                    <div class="col">
                        <p class="heading-text">Courses</p>
                    </div>
                    <div class="col">
                        <p class="steps">Dashboard / Courses / <span>Edit Course</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row aa d-flex justify-content-between" style="background-color: #c4bfff21; border-radius: 0.2rem;">
            <div class="col-md-5 py-2">
                <input type="text" class="iconss py-2" placeholder="Search by course name">
            </div>
            <div class="col-md-6 py-2 d-flex justify-content-end">
                <button class="d-flex justify-content-between px-3 pt-2" type="submit">
                    <img class="pt-1" src="{{ url('assets/images/button icon.png') }}" alt=""
                        style="margin-right: 1%;">Filter</button>
            </div>
        </div>
        <hr>
        <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col star course">
                    <label for="title" class="form-label">Course Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $course->title }}" />
                </div>
                {{-- <div class="col star course">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" value="{{ $course->price }}">
                </div> --}}
                <div class="col course">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option value="active" @if($course->status == 'active') selected @endif>Active</option>
                        <option value="draft" @if($course->status == 'draft') selected @endif>Draft</option>
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col course">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description"
                        rows="5">{{ $course->description }}</textarea>
                </div>
                <div class="col">
                    <label for="feature_image">Feature Image</label>
                    <input type="file" class="form-control" name="feature_image">
                </div>
            </div>
            <div class="btns">
                <div class="row">
                    <div class="col d-flex justify-content-start gap-4">
                        <button class="can mt-3" onclick="backToCourses()">Cancel</button>
                        <button type="submit" class="add mt-3">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
