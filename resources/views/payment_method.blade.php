@php
use App\Helpers\Helper;
@endphp
@extends('frontend.studentdashboard.layouts.course.main')

@section('content')
<div>

    <div class="container-fluid mt-1">
        <div class="row flex-nowrap" style="min-height: 100vh;">
            {{ view('frontend.studentdashboard.layouts.course.sidebar', [ 'courses'=>$data['courses'] ]) }}
            <!-- right side content  -->
            <div class="col py-3 pb-5" id="courses">
                <div class="student-content">
                    <div class="row d-flex justify-content-between">
                        <div class="col  d-flex justify-content-start">
                            <div class="subject-heading"> </div>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <div class="py-2">
                                <input type="text" class="icons py-1  " value="" placeholder="Search">
                            </div>
                        </div>
                    </div>
                    <div class="row flex-column">
                        <div class="col-7 textss text-start ">
                            <span></span>
                        </div>
                        <div class="col mt-3"></div>
                    </div>
                    <div class="contents px-4 mt-4 pt-1">
                        <div class="contents-heading d-flex justify-content-center mt-4 "> Contents </div>
                        <div class="row mt-4">
                           <a class="" href="{{route('payments')}}">Stripe</a>
                           <a class="" href="{{route('tabby')}}">Tabby</a>
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<script>
    $(document).on('click','#dropdownMenuButton', function(){
        $('.dropdown-menu').toggleClass('show');
    });

    $(document).on('click', '#test_quiz_btn', function(){
        let total_qstns = $('.total_qstns').val();
        if(total_qstns == 1)
        {
            $('#btn').text("Finish");
            $('#btn').removeAttr('onclick');
            $('#btn').addClass('finish');
        }
        else
        {
            $('#btn').text("Next Question");
            $('#btn').attr('onclick', 'checkAns()');
            $('#btn').removeAttr('class');
        }
        $('#quizModal').modal('show');

    });

    $(document).on('click', '.close_modal_btn', function(){
        $('#quizModal').modal('hide');
    });

    function lesson(id){
            let courses = document.getElementById('courses');
            let lessons = document.getElementById('lessons');
            courses.classList.add('d-none');
            lessons.classList.remove('d-none');

            $.ajax({
                type: "GET",
                url: "{{ url('get-lesson/') }}/"+id,
                success: function (response) {
                    // console.log(response.data.lesson);
                    $('.lesson_id').val(response.data.lesson.id)
                    let lesson_quizes = response.data.lesson.quizes;
                    let title = document.getElementById('title');
                    let description = document.getElementById('description');

                    title.innerHTML = response.data.lesson.title;
                    description.innerHTML = response.data.lesson.description;
                    if(response.data.lesson.thumbnail != null)
                    {
                        $('.dropdown-menu').empty();
                        $('.dropdown-menu').append(`<a class="dropdown-item" href="{{ asset('assets/courses-content/lesson-images/${response.data.lesson.thumbnail}') }}" target="_blank" >${response.data.lesson.thumbnail}</a>`);
                    }
                    else
                    {
                        $('.dropdown-menu').empty();
                        $('.dropdown-menu').removeClass('show')
                    }

                    // console.log(response.data.lesson.quizes);
                    if(response.data.lesson.quizes != null && response.data.lesson.quizes.length>0 && response.data.lesson.quizes!=[])
                    {

                        $('.total_qstns').val(response.data.lesson.quizes.length);

                        $('.options').empty();
                        $('.question_no').val(0);
                        $('.test-knowledge-btn').removeClass('d-none');
                        $('#currQuesNum').text(1);
                        lesson_quizes.forEach((qstn, index) => {

                            if(index == 0)
                            {
                                $('.correct_answer_description').text(qstn.options.correct_answer_description);
                                $('.correct_answer').val(qstn.options.correct_answer);
                                showQuiz(qstn.question, qstn.options.option1, qstn.options.option2, qstn.options.option3, qstn.options.option4, qstn.options.correct_answer);
                            }
                        });
                        let quiz_qstns_length = parseInt(response.data.lesson.quizes.length);
                        $('#totalQuesNum').text(quiz_qstns_length);
                    }

                    else
                    {
                        $('.options').empty();
                        $('.test-knowledge-btn').addClass('d-none');

                        $('#currQuesNum').text(0);

                        $('.correct_answer').val('');
                        $('.ques').text('')
                        // showQuiz();

                        // console.log("else");
                        let quiz_qstns_length = 0;
                        $('#totalQuesNum').text(quiz_qstns_length);
                    }
                }
            });
    }

</script>
@endsection
