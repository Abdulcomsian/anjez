@php
use App\Helpers\Helper;
@endphp
@extends('frontend.studentdashboard.layouts.course.main')

@section('content')
<style>
    #video-container>iframe {
        width: inherit;
    }

    @media (max-width: 786px) {
        .lecture {
            padding-top: 2%;
            padding-left: 1%;
            padding-right: 2%;
            padding-bottom: 0%;
        }

        #quizModal .custom-modal-dialog {
            max-width: 100% !important;
        }

        #quizModal .custom-modal-dialog .options .option {
            padding: 0.4rem 0 0.4rem 0.3rem;
        }

        #quizModal .custom-modal-dialog .modal-body {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }

        #quizModal .custom-modal-dialog .options .option label {
            margin-left: 5px;

            font-size: 13px;
        }
    }
</style>
<div>
    {{-- @dd($data['courses']); --}}
    <div class="container-fluid mt-1">
        <div class="row flex-nowrap" style="min-height: 100vh;">
            {{ view('frontend.studentdashboard.layouts.course.sidebar', [ 'courses'=>$data['courses'] ]) }}
            <!-- right side content  -->
            <div id="lessons" class="flex-shrink-1">
                <div class="col py-3" id="lessons">
                    <div class="lecture">
                        <div class="upss pb-3 px-3" style="background-color: white;">
                            <div class="row pt-4 pb-2">
                                <div class="col">
                                    <span id="title">{{ app()->getLocale() == 'en' ? $data['lesson']->title : $data['lesson']->title_ar}}</span>
                                </div>
                                <div class="col me-5">
                                    @if(!Helper::isPaymentActive())
                                    <div class="cates  ">
                                        <p>Free</p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p id="description">{!! app()->getLocale() == 'en' ? $data['lesson']->description : $data['lesson']->description_ar !!}</p>
                                </div>
                            </div>
                            <?php
                            try {
                                if ($data['lesson']->is_complete == 0) {
                                    $percentage = ($data['lesson']->quiz_scores ? $data['lesson']->quiz_scores->score_taken : 0) / ($data['lesson']->quiz_scores ? $data['lesson']->quiz_scores->total_score : 0) * 100;
                                } else {
                                    $percentage = 100;
                                }
                            } catch (\Throwable $th) {
                                $percentage = 0;
                            }
                            ?>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:{{ $percentage }}%" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100"></div>

                                {{-- <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div> --}}
                            </div>
                        </div>
                        <div class="embed-responsive embed-responsive-21by9 mt-4" id="video-container" style="width: 100%;">
                            {!!$data['lesson']->video_url!!}
                            {{-- <button id="video-button" data-toggle="modal" data-target="#exampleModal">Test Your
                                Knowledge</button> --}}

                        </div>
                        <div class="course-test-div row mt-4 justify-content-between">
                            @if(isset($data['lesson']->thumbnail) && !empty($data['lesson']->thumbnail) && !is_null($data['lesson']->thumbnail))
                            <div class="col-4 attachment-dropdown">
                                <div class="dropdown">
                                    <button class="btn attach dropdown-toggle" type="button" id="courseAttachmentMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 10px; border-radius: 8px;">
                                        {{app()->getLocale() == 'en' ? 'Course Attachments' : 'مرفقات الدورة' }}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="courseAttachmentMenuButton">
                                        <a class="dropdown-item" target="_blank" href="{{ asset('assets/courses-content/lesson-images/'.$data['lesson']->thumbnail) }}">{{ $data['lesson']->thumbnail }}</a>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if(count($data['lesson']->quizes)>0)
                            <div class="@if(count($data['lesson']->quizes)<=0) offset-8 @endif col-4 justify-content-end test-knowledge-btn">
                                <button class="video-button-2" style="padding: 10px; border-radius: 8px;" id="test_quiz_btn">
                                    {{app()->getLocale() == 'en' ? 'Test Your Knowledge' : 'اختبر معرفتك' }}
                                </button>
                            </div>
                            @else
                            <div class="offset-8 col-4 d-flex justify-content-end">
                                <a href="{{ route('lesson.mark-as-read',['id'=>$data['lesson']->id]) }}">
                                    <button class="mark-as-read" style="padding: 10px; border-radius: 8px;">
                                        {{app()->getLocale() == 'en' ? 'Mark As Read' : 'وسّم كمقروء' }}
                                    </button>
                                </a>
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
                    <h5>
                        @if (app()->getLocale() == 'ar')
                        قم بالإجابة على الأسئلة أدناه
                        @else
                        Answer the questions below
                        @endif
                    </h5>
                    <p class="m-auto"><span id="currQuesNum">1</span> / <span id="totalQuesNum">{{ (int)count($data['lesson']->quizes) }}</span></p>
                    <div class="question m-auto" id="ques">
                        {{ app()->getLocale() == 'ar' ? ($data['lesson']->quizes[0]->question_ar ?? '') : ($data['lesson']->quizes[0]->question ?? '') }}
                        {{-- {{ ($data['lesson']->quizes[0]->question ?? '') }} --}}
                    </div>
                </div>

                <div class="options mt-5" id="opts">
                    <div class="option">
                        <input id="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option1 : '' }}" type="radio" name="answer" value="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option1 : '' }}"><label for="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option1 : '' }}" style="text-decoration: none">{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option1 : '' }}</label>
                    </div>
                    <div class="option">
                        <input id="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option2 : '' }}" type="radio" name="answer" value="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option2 : '' }}"><label for="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option2 : '' }}" style="text-decoration: none">{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option2 : '' }}</label>
                    </div>
                    <div class="option">
                        <input id="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option3 : '' }}" type="radio" name="answer" value="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option3 : '' }}"><label for="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option3 : '' }}" style="text-decoration: none">{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option3 : '' }}</label>
                    </div>
                    <div class="option">
                        <input id="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option4 : '' }}" type="radio" name="answer" value="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option4 : '' }}"><label for="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option4 : '' }}" style="text-decoration: none">{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->option4 : '' }}</label>
                    </div>
                </div>
                <div style="color: red" class="d-none incorrect-answer-div">Incorrect Answer. Correct Option is <span id='corr_ans'> .</span> Reason <span id="corr_ans_reason"></span> </div>
                {{-- <div style="color: green" class="d-none correct-answer-div"></div> --}}

                <div class="modal-footer d-flex flex-column justify-content-center">
                    <input type="hidden" name="correct_answer" class="correct_answer" value="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->correct_answer : '' }}">
                    <input type="hidden" name="lesson_id" class="lesson_id" value="{{ $data['lesson']->id }}">
                    <input type="hidden" name="question_no" class="question_no">
                    <input type="hidden" name="score" class="score" value="0">
                    <input type="hidden" name="total_qstns" class="total_qstns" value="{{ (int)count($data['lesson']->quizes) }}">
                    <input type="hidden" name="correct-answer-description" class="correct_answer_description" value="{{ count($data['lesson']->quizes)>0 ? $data['lesson']->quizes[0]->options->correct_answer_description : '' }}">
                    <button onclick="checkAns()" id="btn">Next Question</button>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '#courseAttachmentMenuButton', function() {
        $('.dropdown-menu').toggleClass('show');
    });

    $(document).on('click', '#test_quiz_btn', function() {
        let total_qstns = $('.total_qstns').val();
        if (total_qstns == 1) {
            $('#btn').text("Finish");
            $('#btn').removeAttr('onclick');
            $('#btn').addClass('finish');
        } else {
            $('#btn').text("Next Question");
            $('#btn').attr('onclick', 'checkAns()');
            $('#btn').removeAttr('class');
        }
        $('#quizModal').modal('show');

    });

    $(document).on('click', '.close_modal_btn', function() {
        $('#quizModal').modal('hide');
    });

    function lesson(id) {
        let courses = document.getElementById('courses');
        let lessons = document.getElementById('lessons');
        courses.classList.add('d-none');
        lessons.classList.remove('d-none');

        $.ajax({
            type: "GET",
            url: "{{ url('get-lesson/') }}/" + id,
            success: function(response) {
                // console.log(response.data.lesson);
                $('.lesson_id').val(response.data.lesson.id)
                let lesson_quizes = response.data.lesson.quizes;
                let title = document.getElementById('title');
                let description = document.getElementById('description');

                title.innerHTML = response.data.lesson.title;
                description.innerHTML = response.data.lesson.description;

                if (response.data.lesson.quizes != null && response.data.lesson.quizes.length > 0 && response.data.lesson.quizes != []) {

                    $('.total_qstns').val(response.data.lesson.quizes.length);

                    $('.options').empty();
                    $('.question_no').val(0);
                    $('.test-knowledge-btn').removeClass('d-none');
                    $('#currQuesNum').text(1);
                    lesson_quizes.forEach((qstn, index) => {

                        if (index == 0) {
                            $('.correct_answer_description').val(qstn.options.correct_answer_description);
                            $('.correct_answer').val(qstn.options.correct_answer);
                            showQuiz(qstn.question, qstn.options.option1, qstn.options.option2, qstn.options.option3, qstn.options.option4, qstn.options.correct_answer);
                        }
                    });
                    let quiz_qstns_length = parseInt(response.data.lesson.quizes.length);
                    $('#totalQuesNum').text(quiz_qstns_length);
                } else {
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
                score += 1;
                $('.score').val(score);

                $('.incorrect-answer-div').removeClass('d-block').addClass('d-none');

                // console.log("Correct");
                let question_no = parseInt($('.question_no').val());
                question_no += 1;
                $('.question_no').val(question_no);
                // console.log("check ans qstn no", question_no);
            } else {
                $('#corr_ans').text(correct_value);
                $('#corr_ans_reason').html(corr_ans_desc);
                $('.incorrect-answer-div').removeClass('d-none').addClass('d-block');
                // console.log("Incorrect");
                return;
            }
            nextQuestion();
        } else {
            $('#corr_ans').text(correct_value);
            $('#corr_ans_reason').html(corr_ans_desc);
            $('.incorrect-answer-div').removeClass('d-none').addClass('d-block');
            // console.log("Please select an answer");
            return;
        }
    }

    function nextQuestion() {
        let corr_ans_desc = $('.correct_answer_description').val(); // correct answer description
        console.log('here corr_ans_desc', corr_ans_desc);
        let id = parseInt($('.lesson_id').val());
        let question_no = parseInt($('#currQuesNum').text());
        console.log("question_no ", question_no + 1);
        $.ajax({
            type: "GET",
            url: '{{url("get-lesson/")}}/' + id,
            success: function(response) {
                // console.log(response.data.lesson);
                $('#currQuesNum').text(question_no + 1);
                // console.log(response.data.lesson);
                $('.lesson_id').val(response.data.lesson.id)
                let lesson_quizes = response.data.lesson.quizes;
                let title = document.getElementById('title');
                let description = document.getElementById('description');

                let quiz_count = lesson_quizes.length;

                title.innerHTML = response.data.lesson.title;
                description.innerHTML = response.data.lesson.description;
                // corr_ans_desc.val(response.data.lesson.options.correct_answer_description);
                if (question_no + 1 == quiz_count) {
                    $('#btn').text("Finish");
                    $('#btn').removeAttr('onclick');
                    $('#btn').addClass('finish');
                } else {
                    $('#btn').text("Next Question");
                    $('#btn').removeClass('finish');
                }

                if (response.data.lesson.quizes != null && response.data.lesson.quizes.length > 0 && response.data.lesson.quizes != []) {
                    $('.options').empty();

                    lesson_quizes.forEach((qstn, index) => {

                        // console.log("qstn = ",qstn, "index = ", index);
                        if (index == question_no) {
                            $('.correct_answer_description').val(qstn.options.correct_answer_description);
                            $('.correct_answer').val(qstn.options.correct_answer);
                            showQuiz(qstn.question, qstn.options.option1, qstn.options.option2, qstn.options.option3, qstn.options.option4, qstn.options.correct_answer);
                        }

                    });
                    let quiz_qstns_length = parseInt(response.data.lesson.quizes.length);
                    // $('#totalQuesNum').text(quiz_qstns_length);
                } else {
                    // console.log("else");
                    let quiz_qstns_length = 0;
                    $('#totalQuesNum').text(quiz_qstns_length);
                }
            }
        });
    }

    function showQuiz(qstn, option1, option2, option3, option4, correct_opt) {
        $('.correct_answer').val(correct_opt);
        $('#ques').text(qstn);
        $('#opts').append(`<div class="option"><input id="${option1}" type="radio" name="answer" value="${option1}"><label for="${option1}" style="text-decoration: none">${option1}</label></div>
        <div class="option"><input id="${option2}" type="radio" name="answer" value="${option2}"><label for="${option2}" style="text-decoration: none">${option2}</label></div>
        <div class="option"><input id="${option3}" type="radio" name="answer" value="${option3}"><label for="${option3}" style="text-decoration: none">${option3}</label></div>
        <div class="option"><input id="${option4}" type="radio" name="answer" value="${option4}"><label for="${option4}" style="text-decoration: none">${option4}</label></div>`);
    }


    function finishQuestions() {
        let corr_ans_desc = $('.correct_answer_description').val(); // correct answer description

        const selectedAns = document.querySelector('input[name="answer"]:checked');
        let total_qstns = parseInt($('.total_qstns').val());
        let lesson_id = parseInt($('.lesson_id').val());
        let correct_value = $('.correct_answer').val();
        if (selectedAns) {
            const selectedAnsValue = selectedAns.value;
            if (selectedAnsValue == correct_value) {
                let score = parseInt($('.score').val());
                score += 1;
                $('.score').val(score);
                $('.incorrect-answer-div').removeClass('d-block').addClass('d-none');
                let question_no = parseInt($('.question_no').val());
                question_no += 1;
                $('.question_no').val(question_no);
                $.ajax({
                    type: "GET",
                    url: "{{ route('score.store') }}",
                    data: {
                        lesson_id: lesson_id,
                        total_score: total_qstns,
                        score: score
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });
            } else {
                $('#corr_ans').text(correct_value);
                $('#corr_ans_reason').html(corr_ans_desc);
                $('.incorrect-answer-div').removeClass('d-none').addClass('d-block');
                return;
            }
        } else {
            $('#corr_ans').text(correct_value);
            $('#corr_ans_reason').html(corr_ans_desc);
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
        </div>`)

    }

    $(document).on('click', '.finish', function() {
        finishQuestions();
    });

    function restartQuiz() {
        let id = $('.lesson_id').val();
        // console.log("lesson_id", id);
        $('#new_score').text(0);
        $('#total_score').text(0);
        let new_score = $('.score').val();
        $.ajax({
            type: "GET",
            url: "{{ url('get-lesson/') }}/" + id,
            success: function(response) {
                $('.lesson_id').val(response.data.lesson.id)
                let lesson_quizes = response.data.lesson.quizes;
                let title = document.getElementById('title');
                let description = document.getElementById('description');

                title.innerHTML = response.data.lesson.title;
                description.innerHTML = response.data.lesson.description;

                if (response.data.lesson.quizes != null && response.data.lesson.quizes.length > 0 && response.data.lesson.quizes != []) {
                    $('.total_qstns').val(response.data.lesson.quizes.length);
                    $('.options').empty();
                    $('.question_no').val(0);
                    $('.test-knowledge-btn').removeClass('d-none');
                    $('#currQuesNum').text(1);
                    lesson_quizes.forEach((qstn, index) => {
                        if (index == 0) {
                            $('.correct_answer_description').val(qstn.options.correct_answer_description);
                            $('.correct_answer').val(qstn.options.correct_answer);
                            showQuiz(qstn.question, qstn.options.option1, qstn.options.option2, qstn.options.option3, qstn.options.option4, qstn.options.correct_answer);
                        }
                    });
                    let quiz_qstns_length = parseInt(response.data.lesson.quizes.length);
                    $('#totalQuesNum').text(quiz_qstns_length);
                } else {
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
        if (total_qstns == 1) {
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
        } else {
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

    function redirect() {
        window.location.reload();
    }
    $(document).on('click', 'mark-as-read', function() {
        let lesson_id = parseInt($('.lesson_id').val());
        $.ajax({
            type: "GET",
            url: "{{ url('lesson/mark-as-read') }}/" + lesson_id,
            success: function(response) {
                window.location.reload();
            }
        });
    });
</script>
@endsection