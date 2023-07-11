@extends('backend.layouts.main')

@section('content')
<div id="course" style="display: block;">

<!-- <div class="user mt-5 pb-5" id="course" style="display: none;"> -->
<div class="user mt-5 pb-5" id="add-course">
              <div class="container">
                <div class="row ">
                  <div class="col mt-4 d-flex justify-content-start">
                    <div class="row d-flex flex-column">
                      <div class="col">
                        <p class="heading-text  ">Courses</p>
                      </div>
                      <div class="col">
                        <p class="steps"> Dashboard / Courses / <span> Create Course</span> </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row aa d-flex justify-content-between"
                  style="background-color:  #c4bfff21;  border-radius:0.2rem ;">
                  <div class="col-md-5 py-2">
                    <input type="text" class="iconss py-2" value placeholder="Search by course name">
                  </div>
                  <div class="col-md-6 py-2 d-flex justify-content-end">
                    <button class="d-flex justify-content-between px-3 pt-2" type="submit"> <img class="pt-1"
                        src="{{ url('assets/images/button icon.png') }}" alt="" style="margin-right: 1%;"> Filter </button>
                  </div>
                </div>
                <hr>
                <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="row">
                    <div class="col star course">
                      <label for="title" class="form-label">Course Title</label>
                      <input type="text" name="title" class="form-control" id="firstname" />
                    </div>
                    <div class="col star course">
                      <label for="price" class="form-label"> Price</label>
                      <input type="number" name="price" class="form-control">
                    </div>
                    <div class="col course">
                      <label for="state" class="form-label"> Status</label>
                      <select class="form-select" name="status" aria-label="Default select example">
                        <option value="active"> Active </option>
                        <option value="draft"> Draft </option>
                      </select>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col course">
                      <label for="description" class="form-label"> Description</label>
                      <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <div class="col">
                        <label for="">Feature Image</label>
                        <input type="file" class="form-control" name="feature_image">
                    </div>
                    {{-- <div class="col">
                      <div class="col star course">
                        <label for="icon" class="form-label">icon</label>
                        <div class="drag">
                          <div class="drag-text d-flex justify-content-center mt-3">
                            <p> Drag and drop your file here</p>
                          </div>
                          <div class="drag-text-2 d-flex justify-content-center">
                            <p> or </p>
                          </div>
                          <div class="drag-btn d-flex justify-content-center">
                            <button id="fileButton"> Browse files
                            </button> </div>
                        </div>
                      </div>
                    </div> --}}
                  </div>

                  <div class="btns">
                    <div class="row">
                      <div class="col d-flex justify-content-start gap-4">
                        <button class="can mt-3" onclick="backToCourses()"> Cancel </button>
                        <button type="submit" class="add mt-3"> Add </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
@endsection
