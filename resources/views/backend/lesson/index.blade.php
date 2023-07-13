@extends('backend.layouts.main')

@section('content')

    <div class="user mt-5 pb-5" id="course-lesson-list">
        <div class="container">
            <div class="row">
                <div class="col mt-4 d-flex justify-content-start">
                    <p class="heading-text d-flex justify-content-center">Course Lesson List</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <button class="px-2 mt-3 plus" data-toggle="modal" data-target="#exampleModalCentertwo">
                        + Add New Lesson
                    </button>
                </div>
            </div>
            <div class="row aa d-flex justify-content-between" style="background-color: #c4bfff21; border-radius: 0.2rem;">
                <div class="col-md-5 py-2">
                    <input type="text" class="iconss py-2" value placeholder="Search by course name">
                </div>
                <div class="col-md-6 py-2 d-flex justify-content-end">
                    <button class="d-flex justify-content-between px-3 pt-2" type="submit">
                        <img class="pt-1" src="{{ url('assets/images/button icon.png') }}" alt="" style="margin-right: 1%;">
                        Filter
                    </button>
                </div>
            </div>
            <hr>
            <div class="row courses d-flex justify-content-between">
                <div class="col-2"> <span> ID </span> </div>
                <div class="col-2"> <span> TITLE </span> </div>
                <div class="col-2"> <span> CONTENT </span> </div>
                <div class="col-2"> <span> QUIZ </span></div>
                <div class="col-2"> <span> STATUS </span></div>
                <div class="col-2"> <span> ACTION </span></div>
            </div>
            <hr class="mt-4">

            <!-- Iterate over lesson data -->
            @foreach ($lessons as $key=>$lesson)
            <div class="row course d-flex justify-content-between mt-2">
                <div class="col-2"> <span> {{ $key+1 }} </span> </div>
                <div class="col-2"> <span> {{ $lesson->title }} </span> </div>
                <div class="col-2"> <span style="color: #2572CC;"> {{ $lesson->video_url }} </span> </div>
                <div class="col-2"> <span style="color: #2572CC;"> Quiz 0 </span></div>
                <div class="col-2"> <span style="color: #1CB104;"> Active </span></div>
                <div class="col-2 dots">
                    <div class="dropdown dropdown-quiz">
                        <img class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" src="{{ url('assets/images/dots.png') }}" alt="">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="{{ route('quiz.index') }}">Create Quiz</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <!-- //course lesson modal  -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCentertwo" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content ">
            <div class="modal-header d-flex justify-content-between align-items-center"
            style="background-color: #F9FAFB;">
            <h5 class="modal-title mx-auto" id="exampleModalLongTitle">Add Lesson</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                style="margin-right: 2px;">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body px-5">

            <form action="{{ route('lessons.store', $id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col star course">
                        <label for="title" class="form-label">Title</label>
                        {{-- <input type="text" class="form-control" id="title" name="title" /> --}}
                        <input type="text" class="form-control" id="title" name="lesson[title]" />
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col star course">
                        <label for="video_url" class="form-label">Video URL</label>
                        {{-- <input type="text" class="form-control" id="video_url" name="video_url" /> --}}
                        <input type="text" class="form-control" id="video_url" name="lesson[video_url]" />
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col course">
                        <label for="description" class="form-label">Description</label>
                        {{-- <textarea class="form-control" id="description" name="description" rows="4"></textarea> --}}
                        <textarea class="form-control" id="description" name="lesson[description]" rows="4"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Thumbnail</label>
                        {{-- <input type="file" class="form-control" name="thumbnail"> --}}
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" />
                    </div>
                    {{-- <div class="col star course">
                        <label for="thumbnail" class="form-label">Thumbnail</label>
                        <div class="drag">
                            <div class="drag-text d-flex justify-content-center mt-3">
                                <p> Drag and drop your file here</p>
                            </div>
                            <div class="drag-text-2 d-flex justify-content-center">
                                <p> or </p>
                            </div>
                            <div class="drag-btn d-flex justify-content-center"><button id="fileButtontwo"> Browse files
                                </button> </div>
                        </div>
                    </div> --}}

                </div>
                <div class="modal-footer">
                    <button type="button" class="can" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="add">Add</button>
                </div>
            </form>
       </div>
   </div>
</div>
@endsection
