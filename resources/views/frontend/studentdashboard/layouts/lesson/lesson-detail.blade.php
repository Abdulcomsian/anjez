@extends('frontend.studentdashboard.layouts.course.main')

@section('content')
<div>
    {{-- @dd($data['courses']); --}}
    <div class="container-fluid mt-1">
        <div class="row flex-nowrap" style="min-height: 100vh;">
            {{ view('frontend.studentdashboard.layouts.course.sidebar', [ 'courses'=>$data['courses'] ]) }}
            <!-- right side content  -->
            <div id="lessons" class="col-md-10">
                <div class="col py-3" id="lessons">
                    <div class="lecture">
                        <div class="upss pb-3 px-3" style="background-color: white;">
                            <div class="row pt-4 pb-2">
                                <div class="col">
                                    <span id="title">{{ $data['lesson']->title }}</span>
                                </div>
                                <div class="col me-5">
                                    <div class="cates  ">
                                        <p>Free</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p id="description">{!! $data['lesson']->description !!}</p>
                                </div>
                            </div>
                            <div class="progress">
                                <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="embed-responsive embed-responsive-21by9 mt-4" id="video-container">
                            <video id="myVideo" class="embed-responsive-item" src="./assets/videos/THAILAND IN 30 SECONDS - CINEMATIC VIDEO- 4k.mp4" controls=""></video>
                            <button id="video-button" data-toggle="modal" data-target="#exampleModal">Test Your
                                Knowledge</button>

                        </div>
                        <div class="course-test-div row mt-4 justify-content-between">
                            @if(isset($data['lesson']->thumbnail) && !empty($data['lesson']->thumbnail) && !is_null($data['lesson']->thumbnail))
                                <div class="col-4 attachment-dropdown">
                                    <div class="dropdown">
                                        <button class="btn attach dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 10px; border-radius: 8px;">
                                            Course Attachments
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" target="_blank" href="{{ asset('assets/courses-content/lesson-images/'.$data['lesson']->thumbnail) }}">{{ $data['lesson']->thumbnail }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if(isset($data['lesson']->thumbnail) && !empty($data['lesson']->thumbnail) && !is_null($data['lesson']->thumbnail))
                                <div class="col-4 d-flex justify-content-end test-knowledge-btn">
                                    <button class="video-button-2" style="padding: 10px; border-radius: 8px;" id="test_quiz_btn">Test Your
                                        Knowledge
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
{{-- @dd($data['lesson']->quizes[0]); --}}
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
                    <p class="m-auto"><span id="currQuesNum">1</span> / <span
                            id="totalQuesNum">{{ (int)count($data['lesson']->quizes) }}</span></p>
                    <div class="question m-auto" id="ques">
                        {{ $data['lesson']->quizes[0]->question }}
                    </div>
                </div>

                <div class="options mt-5" id="opts">
                    <div class="option">
                        <input type="radio" name="answer" value="{{ $data['lesson']->quizes[0]->options->option1 }}"><label style="text-decoration: none">{{ $data['lesson']->quizes[0]->options->option1 }}</label>
                    </div>
                    <div class="option">
                        <input type="radio" name="answer" value="{{ $data['lesson']->quizes[0]->options->option2 }}"><label style="text-decoration: none">{{ $data['lesson']->quizes[0]->options->option2 }}</label>
                    </div>
                    <div class="option">
                        <input type="radio" name="answer" value="{{ $data['lesson']->quizes[0]->options->option3 }}"><label style="text-decoration: none">{{ $data['lesson']->quizes[0]->options->option3 }}</label>
                    </div>
                    <div class="option">
                        <input type="radio" name="answer" value="{{ $data['lesson']->quizes[0]->options->option4 }}"><label style="text-decoration: none">{{ $data['lesson']->quizes[0]->options->option4 }}</label>
                    </div>
                </div>
                <div style="color: red" class="d-none incorrect-answer-div">Incorrect Answer.  Correct Option is <span id='corr_ans'> .</span> Reason <span id="corr_ans_reason"></span> </div>
                {{-- <div style="color: green" class="d-none correct-answer-div"></div> --}}

                <div class="modal-footer d-flex flex-column justify-content-center">
                    <input type="hidden" name="correct_answer" class="correct_answer" value="{{ $data['lesson']->quizes[0]->options->correct_answer }}">
                    <input type="hidden" name="lesson_id" class="lesson_id" value="{{ $data['lesson']->id }}">
                    <input type="hidden" name="question_no" class="question_no">
                    <input type="hidden" name="score" class="score" value="0">
                    <input type="hidden" name="total_qstns" class="total_qstns" value="{{ (int)count($data['lesson']->quizes) }}">
                    <input type="hidden" name="correct-answer-description" class="correct_answer_description" value="{{ $data['lesson']->quizes[0]->options->correct_answer_description }}">
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
                                $('.correct_answer_description').val(qstn.options.correct_answer_description);
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

    function checkAns() {
        const selectedAns = document.querySelector('input[name="answer"]:checked');
        let corr_ans_desc = $('.correct_answer_description').val(); // correct answer description
        console.log('corr_ans_desc', corr_ans_desc);
        let correct_value = $('.correct_answer').val();
        if (selectedAns) {
            // console.log(selectedAns.value);
            const selectedAnsValue = selectedAns.value;
            // console.log(correct_value);
            if (selectedAnsValue == correct_value) {
                let score = parseInt($('.score').val());
                // console.log("score", score);
                score+=1;
                $('.score').val(score);

                $('.incorrect-answer-div').removeClass('d-block').addClass('d-none');

                // console.log("Correct");
                let question_no = parseInt($('.question_no').val());
                question_no+=1;
                $('.question_no').val(question_no);
                // console.log("check ans qstn no", question_no);
            }
            else{
                $('#corr_ans').text(correct_value);
                $('#corr_ans_reason').val(corr_ans_desc);
                $('.incorrect-answer-div').removeClass('d-none').addClass('d-block');
                // console.log("Incorrect");
                return;
            }
            nextQuestion();
        } else {
            $('#corr_ans').text(correct_value);
            $('#corr_ans_reason').text(corr_ans_desc);
            $('.incorrect-answer-div').removeClass('d-none').addClass('d-block');
            // console.log("Please select an answer");
            return;
        }
    }

    function nextQuestion()
    {
        let corr_ans_desc = $('.correct_answer_description').val(); // correct answer description
        console.log('here corr_ans_desc', corr_ans_desc);
        let id = parseInt($('.lesson_id').val());
        let question_no = parseInt($('#currQuesNum').text());
        console.log("question_no ", question_no+1);
        $.ajax({
            type: "GET",
            url: '{{url("get-lesson/")}}/'+id,
            success: function (response) {
                // console.log(response.data.lesson);
                $('#currQuesNum').text(question_no+1);
                // console.log(response.data.lesson);
                $('.lesson_id').val(response.data.lesson.id)
                let lesson_quizes = response.data.lesson.quizes;
                let title = document.getElementById('title');
                let description = document.getElementById('description');

                let quiz_count = lesson_quizes.length;

                title.innerHTML = response.data.lesson.title;
                description.innerHTML = response.data.lesson.description;
                // corr_ans_desc.val(response.data.lesson.options.correct_answer_description);
                if(question_no+1 == quiz_count)
                {
                    $('#btn').text("Finish");
                    $('#btn').removeAttr('onclick');
                    $('#btn').addClass('finish');
                }
                else
                {
                    $('#btn').text("Next Question");
                    $('#btn').removeClass('finish');
                }

                if(response.data.lesson.quizes != null && response.data.lesson.quizes.length>0 && response.data.lesson.quizes != [])
                {
                    $('.options').empty();

                    lesson_quizes.forEach((qstn, index) => {

                        // console.log("qstn = ",qstn, "index = ", index);
                        if(index == question_no)
                        {
                            $('.correct_answer_description').val(qstn.options.correct_answer_description);
                            $('.correct_answer').val(qstn.options.correct_answer);
                            showQuiz(qstn.question, qstn.options.option1, qstn.options.option2, qstn.options.option3, qstn.options.option4, qstn.options.correct_answer);
                        }

                    });
                    let quiz_qstns_length = parseInt(response.data.lesson.quizes.length);
                    // $('#totalQuesNum').text(quiz_qstns_length);
                }
                else
                {
                    // console.log("else");
                    let quiz_qstns_length = 0;
                    $('#totalQuesNum').text(quiz_qstns_length);
                }
            }
        });
    }

    function showQuiz (qstn, option1, option2, option3, option4, correct_opt)
    {
        $('.correct_answer').val(correct_opt);
        $('#ques').text(qstn);
        $('#opts').append(`<div class="option"><input type="radio" name="answer" value="${option1}"><label style="text-decoration: none">${option1}</label></div>
        <div class="option"><input type="radio" name="answer" value="${option2}"><label style="text-decoration: none">${option2}</label></div>
        <div class="option"><input type="radio" name="answer" value="${option3}"><label style="text-decoration: none">${option3}</label></div>
        <div class="option"><input type="radio" name="answer" value="${option4}"><label style="text-decoration: none">${option4}</label></div>`);
    }


function finishQuestions(){
    let corr_ans_desc = $('.correct_answer_description').val(); // correct answer description

    const selectedAns = document.querySelector('input[name="answer"]:checked');
    let total_qstns = parseInt($('.total_qstns').val());
    let lesson_id = parseInt($('.lesson_id').val());
    let correct_value = $('.correct_answer').val();
        if (selectedAns) {
            const selectedAnsValue = selectedAns.value;
            if (selectedAnsValue == correct_value) {
                let score = parseInt($('.score').val());
                score+=1;
                $('.score').val(score);
                $('.incorrect-answer-div').removeClass('d-block').addClass('d-none');
                let question_no = parseInt($('.question_no').val());
                question_no+=1;
                $('.question_no').val(question_no);
                $.ajax({
                    type: "GET",
                    url: "{{ route('score.store') }}",
                    data: {
                        lesson_id: lesson_id,
                        total_score: total_qstns,
                        score: score
                    },
                    success: function (response) {
                        console.log(response);
                    }
                });
            }
            else{
                $('#corr_ans').text(correct_value);
                $('#corr_ans_reason').text(corr_ans_desc);
                $('.incorrect-answer-div').removeClass('d-none').addClass('d-block');
                return;
            }
        } else {
            $('#corr_ans').text(correct_value);
            $('#corr_ans_reason').text(corr_ans_desc);
            $('.incorrect-answer-div').removeClass('d-none').addClass('d-block');
            return;
        }

        let new_score = $('.score').val();
    $('.modal-body').empty();
    $('.modal-body').append(`<div id="score" style="display: block;"><h2>Congratulations!</h2> <p> You answered </p> <h2> <span id="new_score">${new_score}</span> / <span id="total_score">${total_qstns}</span> </h2> <h3> question correct </h3></div>
        <div class=" d-flex flex-column">
        </div>
        <input type="hidden" name="lesson_id" class="lesson_id" value="${lesson_id}">
        <input type="hidden" name="question_no" class="question_no" value="0">
        <input type="hidden" name="total_qstns" class="total_qstns" value="${total_qstns}">
        <div class="modal-footer d-flex flex-column justify-content-center">

        </div>
        <div class="row d-flex justify-content-center pb-5 mt-4">
            <div class="col-3">
                <button id="restartBtn" onclick="restartQuiz()" style="display: inline-block;">Restart Quiz</button>

            </div>
            <div class="col-3">
                <button id="restartBtn2" style="display: inline-block;"> <a href="#" onclick="redirect()"> Back to Home</a> </button>
                <div id="score" style="display: none;"></div>
            </div>
            <div class="col-3">
                <button id="restartBtn2" style="display: inline-block;"> <a href="{{ route('lesson.next',['id'=>encryptParams($data['lesson']->id) ] ) }}" > Next Lesson</a> </button>
            </div>
        </div>`
    )

}

$(document).on('click', '.finish', function(){
    finishQuestions();
});

function restartQuiz()
{
    let id = $('.lesson_id').val();
    // console.log("lesson_id", id);
    $('#new_score').text(0);
    $('#total_score').text(0);
    let new_score = $('.score').val();
    $.ajax({
            type: "GET",
            url: "{{ url('get-lesson/') }}/"+id,
            success: function (response) {
                $('.lesson_id').val(response.data.lesson.id)
                let lesson_quizes = response.data.lesson.quizes;
                let title = document.getElementById('title');
                let description = document.getElementById('description');

                title.innerHTML = response.data.lesson.title;
                description.innerHTML = response.data.lesson.description;

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
                            $('.correct_answer_description').val(qstn.options.correct_answer_description);
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
                    let quiz_qstns_length = 0;
                    $('#totalQuesNum').text(quiz_qstns_length);
                }
            }
        });
    let total_qstns = parseInt($('.total_qstns').val());
    $('.modal-body').empty();
    if(total_qstns == 1)
    {
        console.log("if", total_qstns);
        $('.modal-body').append(`<div class="d-flex flex-column">
        <h5> Answer the questions below</h5>
        <p class="m-auto"><span id="currQuesNum"></span> / <span
                id="totalQuesNum"></span></p>
        <div class="question m-auto" id="ques">

        </div>
    </div>

    <div class="options mt-5" id="opts">
    </div>
    <div style="color: red" class="d-none incorrect-answer-div">Incorrect Answer.  Correct Option is <span id='corr_ans'> .</span> Reason <span id="corr_ans_reason"></span> </div>


    <div class="modal-footer d-flex flex-column justify-content-center">
        <input type="hidden" name="correct_answer" class="correct_answer">
        <input type="hidden" name="lesson_id" class="lesson_id">
        <input type="hidden" name="question_no" class="question_no">
        <input type="hidden" name="correct-answer-description" class="correct_answer_description">
        <input type="hidden" name="score" class="score" value="0">
        <input type="hidden" name="total_qstns" class="total_qstns">
            <button id="btn" class="finish">Finish</button>
    </div>`);
    }
    else
    {
        $('.modal-body').append(`<div class="d-flex flex-column">
        <h5> Answer the questions below</h5>
        <p class="m-auto"><span id="currQuesNum"></span> / <span
                id="totalQuesNum"></span></p>
        <div class="question m-auto" id="ques">

        </div>
    </div>

    <div class="options mt-5" id="opts">
    </div>
    <div style="color: red" class="d-none incorrect-answer-div">Incorrect Answer.  Correct Option is <span id='corr_ans'> .</span> Reason <span id="corr_ans_reason"></span> </div>


    <div class="modal-footer d-flex flex-column justify-content-center">
        <input type="hidden" name="correct_answer" class="correct_answer">
        <input type="hidden" name="lesson_id" class="lesson_id">
        <input type="hidden" name="question_no" class="question_no">
        <input type="hidden" name="correct-answer-description" class="correct_answer_description">
        <input type="hidden" name="score" class="score" value="0">
        <input type="hidden" name="total_qstns" class="total_qstns">
            <button onclick="checkAns()" id="btn" class="next-qstn">Next Question</button>
    </div>`);

    }
}

function redirect () {
    window.location.reload();
}
</script>
@endsection
