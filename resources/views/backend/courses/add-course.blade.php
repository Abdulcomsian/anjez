@extends('backend.layouts.main')

@section('content')

{{-- <div id="course" style="display: block;"> --}}

<!-- <div class="user mt-5 pb-5" id="course" style="display: none;"> -->
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

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
                {{-- <div class="row aa d-flex justify-content-between"
                  style="background-color:  #c4bfff21;  border-radius:0.2rem ;">
                  <div class="col-md-5 py-2">
                    <input type="text" class="iconss py-2" value placeholder="Search by course name">
                  </div>
                  <div class="col-md-6 py-2 d-flex justify-content-end">
                    <button class="d-flex justify-content-between px-3 pt-2" type="submit"> <img class="pt-1"
                        src="{{ url('assets/images/button icon.png') }}" alt="" style="margin-right: 1%;"> Filter </button>
                  </div>
                </div> --}}
                <hr>
                <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col star course">
                            <label for="title" class="form-label">Course Title (En) </label>
                            <input type="text" name="title" class="form-control" id="firstname" />
                        </div>
                        <div class="col star course">
                            <label for="title" class="form-label">Course Title (Ar) </label>
                            <input type="text" name="title_ar" class="form-control" id="firstname" />
                        </div>

                    </div>

                    {{-- <div class="row mt-4">
                        <div class="col star course">
                            <label for="price" class="form-label"> Price (En) </label>
                            <input type="number" name="price" class="form-control">
                        </div>
                        <div class="col star course">
                            <label for="price" class="form-label"> Price (Ar) </label>
                            <input type="number" name="price_ar" class="form-control">
                        </div>P
                    </div> --}}

                    <div class="row mt-4">
                        <div class="col-6 course">
                            <label for="state" class="form-label"> Status (En) </label>
                            <select class="form-select" name="status" aria-label="Default select example">
                                <option value="Active"> Active </option>
                                <option value="Draft"> Draft </option>
                            </select>
                        </div>
                        <div class="col-6 course">
                            <label for="state" class="form-label"> Status (Ar) </label>
                            <select class="form-select" name="status_ar" aria-label="Default select example">
                                <option value="نشيط"> نشيط </option>
                                <option value="مسودہ"> مسودہ </option>
                            </select>
                        </div>
                    </div>

                  <div class="row mt-4">
                    <div class="col-6 course">
                      <label for="description" class="form-label"> Description (En) </label>
                      <textarea id="editor" name="description"></textarea>

                      {{-- <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"></textarea> --}}
                    </div>

                    <div class="col-6 course">
                        <label for="description" class="form-label"> Description (Ar) </label>
                        <textarea id="editor_ar" name="description_ar"></textarea>

                        {{-- <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"></textarea> --}}
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

                  <div class="row mt-4">
                      <div class="col-6">
                        <label for="">Feature Image</label>
                        <input type="file" class="form-control" name="feature_image">
                    </div>

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
        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>

        <script>
             ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );

     ClassicEditor
    .create( document.querySelector( '#editor_ar' ) )
    .catch( error => {
        console.error( error );
    } );
        </script>
@endsection
