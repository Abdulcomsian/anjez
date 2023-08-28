@extends('backend.layouts.main')

@section('content')

    <div class="user mt-5 pb-5" id="course-lesson-list">
        <div class="container">
            <div class="row">
                <div class="col mt-4 d-flex justify-content-start">
                    <p class="heading-text d-flex justify-content-center">Course Lesson List</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <button class="px-2 mt-3 plus" onclick="add_lesson()">
                        + Add New Lesson
                    </button>
                </div>
            </div>
            <form method="get">
                <div class="row aa d-flex justify-content-between" style="background-color: #c4bfff21; border-radius: 0.2rem;">
                    <div class="col-md-5 py-2">
                        <input type="text" class="iconss py-2" name="search" value placeholder="Search by course name">
                    </div>
                    <div class="col-md-6 py-2 d-flex justify-content-end">
                        <button class="d-flex justify-content-between px-3 pt-2" type="submit">
                            <img class="pt-1" src="{{ url('assets/images/button icon.png') }}" alt="" style="margin-right: 1%;">
                            Filter
                        </button>
                    </div>
                </div>
            </form>
            <hr>
            <div class="row courses d-flex justify-content-between">
                <div class="col-1"> <span> ID </span> </div>
                <div class="col-2"> <span> TITLE </span> </div>
                <div class="col-5"> <span> Video URL </span> </div>
                <div class="col-1"> <span> QUIZ </span></div>
                <div class="col-1"> <span> STATUS </span></div>
                <div class="col-1"> <span> ACTION </span></div>
            </div>
            <hr class="mt-4">

            <!-- Iterate over lesson data -->
            @foreach ($lessons as $key=>$lesson)
            <div class="row course d-flex justify-content-between mt-2">
                <div class="col-1"> <span> {{ $key+1 }} </span> </div>
                <div class="col-2"> <span> {{ $lesson->title }} </span> </div>
                <div class="col-5"> <span style="color: #2572CC;"> {{ $lesson->video_url }} </span> </div>
                <div class="col-1"> <span style="color: #2572CC;"> Quiz :{{ $lesson->quizes_count }} </span></div>
                <div class="col-1"> <span style="color: #1CB104;"> Active </span></div>
                <div class="col-1 dots">
                    <div class="dropdown dropdown-quiz">
                        <img class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" src="{{ url('assets/images/dots.png') }}" alt="">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p class="dropdown-item edit-btn" data-id="{{ $lesson->id }}">Edit</p>
                            <a class="dropdown-item" href="{{ route('lesson.delete',['id'=>$lesson->id]) }}">Delete</a>
                            <a class="dropdown-item" onclick="isAllowToCreateLesson()" href="{{ route('quiz.index', ['id'=>$lesson->id]) }}">Create Quiz</a>
                            {{-- <p class="dropdown-item" onclick="isAllowToCreateLesson({{ $lesson->id }})">Create Quiz</p> --}}
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
            <button type="button" class="close can"  data-dismiss="exampleModalCentertwo" aria-label="Close"
                style="margin-right: -32px;">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body px-5">

            <form action="{{ route('lessons.store', $id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="lesson_id" class="lesson_id">
                    <div class="row m-0 p-0">
                        <div class="col star course">
                            <label for="title" class="form-label">Title (En) </label>
                            {{-- <input type="text" class="form-control" id="title" name="title" /> --}}
                            <input type="text" class="form-control" id="title" name="lesson[title]" />
                        </div>
                        <div class="col star course">
                            <label for="title" class="form-label">Title (Ar) </label>
                            {{-- <input type="text" class="form-control" id="title" name="title" /> --}}
                            <input type="text" class="form-control" id="title_ar" name="lesson[title_ar]" />
                        </div>

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
                    <div class="col course course_description">
                        <label for="description" class="form-label">Description (En) </label>
                        <textarea id="editor" name="lesson[description]"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col course course_description">
                        <label for="description" class="form-label">Description (Ar) </label>
                        <textarea id="editor_ar" name="lesson[description_ar]"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Attachment</label>
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
                    <button type="button" class="can" data-dismiss="exampleModalCentertwo">Cancel</button>
                    <button type="submit" class="add">Add</button>
                </div>
            </form>
       </div>
   </div>
</div>


<script>
       $(document).on('click', '.edit-btn', function () {
        let id = $(this).data('id');
        $('.lesson_id').val(id);
        $.ajax({
            type: "GET",
            url: '{{ url('section/lesson/edit') }}/'+id,
            success: function (response) {
                if(response.status)
                {
                    $('#exampleModalCentertwo').modal('show');
                    console.log(response.data);
                    $('#title').val(response.data.title);
                    $('#title_ar').val(response.data.title_ar);
                    $('#video_url').val(response.data.video_url)
                    $('#thumbnail').text(response.data.thumbnail);
                    ClassicEditor
                    .create( document.querySelector('#editor') )
                    .then(editor => {
                        editor.setData(response.data.description); // Assuming 'content' is the field containing the CKEditor data in your database
                    })
                    .catch( error => {
                        console.error( error );
                    } );
                    ClassicEditor
                    .create( document.querySelector('#editor_ar') )
                    .then(editor => {
                        editor.setData(response.data.description_ar); // Assuming 'content' is the field containing the CKEditor data in your database
                    })
                    .catch( error => {
                        console.error( error );
                    } );
                }
            }
        });
    });



    function add_lesson ()
    {
        $('#exampleModalCentertwo').modal('show');
        $('#title').val('');
        $('#video_url').val('')
    }

    // console.log('Before CKEditor initialization');
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            // console.log('CKEditor initialized');
        } )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#editor_ar' ) )
        .then( editor => {
            // console.log('CKEditor initialized');
        } )
        .catch( error => {
            console.error( error );
        } );
    // console.log('After CKEditor initialization');

    let cancel_btn = document.getElementsByClassName('can')[0];
    cancel_btn.addEventListener('click', function() {
        $('#exampleModalCentertwo').modal('hide');
    });

</script>
@endsection
