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
                            <div class="subject-heading"> {{ $data['course']->title }} </div>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <div class="py-2">
                                <input type="text" class="icons py-1  " value="" placeholder="Search">
                            </div>
                        </div>
                    </div>
                    <div class="row flex-column">
                        <div class="col-7 textss text-start ">
                            <span>{!! $data['course']->description !!}</span>
                        </div>
                        <div class="col mt-3"> <button class="px-4" type="button"> <a href="/payment.html">
                                    Subscribe </a> </button></div>
                    </div>
                    <div class="contents px-4 mt-4 pt-1">
                        <div class="contents-heading d-flex justify-content-center mt-4 "> Contents </div>
                        <div class="row mt-4">
                            @forelse ($data['course']['sections'] as $section)
                                @foreach($section['lessons'] as $key=>$lesson)
                                @if($key == 0)
                                        <div class="col py-2">
                                            <a href="{{ route('lesson.quizes',['id'=>encryptParams($lesson->id)]) }}" style="text-decoration: none" >Lesson {{ $key+1 }} - {{ $lesson->title }}</a>
                                            <?php
                                            try
                                            {
                                                $percentage = ($lesson->quiz_scores ? $lesson->quiz_scores->score_taken : 0)/($lesson->quiz_scores ? $lesson->quiz_scores->total_score : 0)*100;
                                            }
                                            catch (\Throwable $th)
                                            {
                                                $percentage = 0;
                                            }
                                            ?>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width:{{ $percentage }}%" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="cate mt-2 ">
                                                <p>Free</p>
                                            </div>
                                        </div>
                                    @else
                                    @if(Helper::isPaymentActive())
                                        <div class="col py-2">
                                            <a href="{{ route('lesson.quizes',['id'=>encryptParams($lesson->id)]) }}" style="text-decoration: none" >Lesson {{ $key+1 }} - {{ $lesson->title }}</a>
                                            <?php
                                        try
                                            {
                                                $percentage = ($lesson->quiz_scores ? $lesson->quiz_scores->score_taken : 0)/($lesson->quiz_scores ? $lesson->quiz_scores->total_score : 0)*100;
                                            }
                                            catch (\Throwable $th)
                                            {
                                                $percentage = 0;
                                            }
                                            ?>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width:{{ $percentage }}%" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <div class="cate mt-2 ">
                                                <p>Free</p>
                                            </div>
                                        </div>
                                    @else
                                    <div class="col py-2">
                                        <a href="{{ route('payments') }}" style="text-decoration: none" >Lesson {{ $key+1 }} - {{ $lesson->title }}</a>
                                        <?php
                                        try
                                        {
                                            $percentage = ($lesson->quiz_scores ? $lesson->quiz_scores->score_taken : 0)/($lesson->quiz_scores ? $lesson->quiz_scores->total_score : 0)*100;
                                        }
                                        catch (\Throwable $th)
                                        {
                                            $percentage = 0;
                                        }
                                        ?>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width:{{ $percentage }}%" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="cate mt-2 ">
                                            <p>Free</p>
                                            {{-- <img src="{{ asset('assets/images/crown.png') }}" alt=""> --}}

                                        </div>
                                    </div>
                                    @endif

                                    @endif
                                @endforeach
                            @empty
                            <div class="col py-2">
                                <h4>No Lesson Found !</h4>
                            </div>
                            @endforelse

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="quizModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog custom-modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="display: flex; justify-content:end ">

                <button type="button" class="close" class="" data-dismiss="modal" aria-label="Close" style="background: none;
                color: black;font-weight: bold;">
                    <span aria-hidden="true" class="close_modal_btn" style="font-size: 23px">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="d-flex flex-column">
                    <h5> Answer the questions below</h5>
                    <p class="m-auto"><span id="currQuesNum"></span> / <span
                            id="totalQuesNum"></span></p>
                    <div class="question m-auto" id="ques">

                    </div>
                </div>

                <div class="options mt-5" id="opts">
                </div>
                <div style="color: red" class="d-none incorrect-answer-div">Incorrect Answer.  Correct Option is <span id='corr_ans'> .</span> Reason <span id="corr_ans_reason"></span> </div>
                {{-- <div style="color: green" class="d-none correct-answer-div"></div> --}}

                <div class="modal-footer d-flex flex-column justify-content-center">
                    <input type="hidden" name="correct_answer" class="correct_answer">
                    <input type="hidden" name="lesson_id" class="lesson_id">
                    <input type="hidden" name="question_no" class="question_no">
                    <input type="hidden" name="score" class="score" value="0">
                    <input type="hidden" name="total_qstns" class="total_qstns" value="0">
                    <input type="hidden" name="correct-answer-description" class="correct_answer_description">
                    <button onclick="checkAns()" id="btn">Next Question</button>
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
