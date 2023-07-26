
<div class="col-auto col-md-3 col-xl-2 px-0 bg-white">
    <div class="d-flex flex-column align-items-center align-items-sm-start pt-2 text-white">
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100 mt-3" id="menu">
            <div class="one" onclick="dropOne()">
                <li class="dropdown font-noto-sans nav-item w-100 px-lg-3 px-sm-0 mt-3 ms-3 open" onclick="dropOne()">
                    <img src="./assets//images/corses icon.png" alt="" onclick="dropOne()">
                    <a class="dropdown-toggle ms-2 " data-toggle="dropdown" href="#" onclick="dropOne()" aria-expanded="true"> Courses <span class="caret"></span></a>
                </li>
            </div>
            <!-- dropdown-one  -->
            @forelse ($courses as $key=>$course)
            <?php
                if($key>=4)
                {
                    $key=1;
                    ++$key;
                }
            ?>
                <div onclick="course{{ $course->id }}()" class="">
                    <div class="d-flex ms-4 mt-3">
                        <div class="sub-name{{ $key }} ms-2"> <span class="span_tag"> {{ strtoupper($course->title[0]) }} </span> </div>
                        @if(count($course['sections'])>0)
                            <a class="dropdown-toggle ms-2 mt-2 subject main-topic-{{ $course->id }}" data-toggle="dropdown" href="javascript:void(0);" aria-expanded="false">
                                {{ $course->title }} <span class="caret"></span></a>
                        @else
                            <a style="color: black" class="ms-2 mt-2 subject" href="#">
                                {{ $course->title }} <span class="caret"></span></a>
                        @endif
                    </div>
                </div>
                <!-- dropdown-two  -->
                @if(isset($course->sections) && count($course->sections)>0)
                    <div id="section{{ $course->id }}" class="">
                        <div class="two d-flex flex-column mt-3 pb-3">
                            @foreach($course['sections'] as $mainTopic)
                                {{-- <a class=" ms-2 mt-3 main-topic" href="#">{{$mainTopic->title}}<span class="caret"></span></a> --}}
                                @if(count($mainTopic->lessons)>0)
                                    <a class="dropdown-toggle ms-2 mt-3 sub-topic-{{ $mainTopic->id }}" onclick="section{{$mainTopic->id}}()" data-toggle="dropdown" href="javascript:void(0);" > {{$mainTopic->title}}
                                        <span class="caret"></span>
                                    </a>
                                    <!-- dropdown three  -->
                                    @if(count($mainTopic->lessons)>0)
                                    <div id="lesson{{ $mainTopic->id }}" class="">
                                        @foreach ($mainTopic->lessons as $lesson)
                                            <div class="three d-flex flex-column">
                                                <a class="ms-4 mt-3 px-2" id="sub" href="javascript:void(0);" onClick="lesson{{ $lesson->id }}()" style=" width: 100%;"> {{ $lesson->title }}
                                                    <span class="caret"></span></a>
                                            </div>

                                        @endforeach
                                    </div>
                                    @endif
                                @else
                                    <a class=" ms-2 mt-3" href="#">{{$mainTopic->title}}<span class="caret"></span></a>
                                @endif
                                    {{-- <a class=" ms-4 mt-3 px-2 " href="#" style=" width: 100%;"> Sub Topic <span class="caret"></span></a> --}}
                                {{-- <a class=" ms-2 mt-3 main-topic" href="#"> Main Topic <span class="caret"></span></a>
                                <a class=" ms-2 mt-3 main-topic" href="#"> Main Topic <span class="caret"></span></a> --}}
                                @endforeach

                        </div>
                    </div>
                @endif
            @empty
            @endforelse

            {{-- <div id="drop-one1" class="toggles">
                <div class="d-flex ms-4 mt-3">
                    <div class="sub-name1 ms-2"> <span> M </span> </div>
                    <a class="dropdown-toggle ms-2 mt-2 subject" data-toggle="dropdown" href="#">
                        Mathematics <span class="caret"></span></a>
                </div>
            </div>
            <div id="drop-one2" class="toggles">
                <div class="d-flex ms-4 mt-3">
                    <div class="sub-name2 ms-2"> <span> P </span> </div>
                    <a class="dropdown-toggle ms-2 mt-2 subject" data-toggle="dropdown" href="#">
                        Physics <span class="caret"></span></a>
                </div>
            </div>
            <div id="drop-one3" class="toggles">
                <div class="d-flex ms-4 mt-3">
                    <div class="sub-name3 ms-2"> <span> C </span> </div>
                    <a class="dropdown-toggle ms-2 mt-2 subject" data-toggle="dropdown" href="#">
                        Chemistry <span class="caret"></span></a>
                </div>
            </div> --}}
        </ul>
    </div>
</div>

<div id="lessons" class="d-none">
    <div class="col py-3" id="lessons">
        <div class="lecture">
            <div class="upss pb-3 px-3" style="background-color: white;">
                <div class="row pt-4 pb-2">
                    <div class="col">
                        <span id="title"> </span>
                    </div>
                    <div class="col me-5">
                        <div class="cates  ">
                            <p>Free</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p id="description"></p>
                    </div>
                </div>
                <div class="progress">
                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            {{-- <div class="embed-responsive embed-responsive-21by9 mt-4" id="video-container">
                <video id="myVideo" class="embed-responsive-item" src="./assets/videos/THAILAND IN 30 SECONDS - CINEMATIC VIDEO- 4k.mp4" controls=""></video>
                <button id="video-button" data-toggle="modal" data-target="#exampleModal">Test Your
                    Knowledge</button>

            </div> --}}
            <div class="embed-responsive embed-responsive-16by9 mt-4" id="video-container">
                <video id="myVideo" class="embed-responsive-item"
                    src="{{ asset('assets/videos/THAILAND IN 30 SECONDS - CINEMATIC VIDEO- 4k.mp4') }}" controls></video>
                <button id="video-button" data-toggle="modal" data-target="#exampleModal">Test Your
                    Knowledge
                </button>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="dropdown">
                        <button class="btn attach dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Course Attachments
                        </button>
                        <div class="dropdown-menu pe-5" aria-labelledby="dropdownMenuButton" style="">
                            <a class="dropdown-item" href="#">Attachment 1</a>
                            <a class="dropdown-item" href="#">Attachment 2</a>
                            <a class="dropdown-item" href="#">Attachment 3</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal -->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog custom-modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body px-5">
                            <div class=" d-flex flex-column">
                                <h5> Answer the questions below</h5>
                                <p class="m-auto"><span id="currQuesNum"></span> / <span
                                        id="totalQuesNum"></span></p>
                                <div class="question m-auto" id="ques"></div>
                            </div>

                            <div class="options mt-5" id="opt"></div>
                            <div class="modal-footer d-flex flex-column justify-content-center">
                                <button onclick="checkAns()" id="btn"></button>
                            </div>
                            <div class="row d-flex justify-content-center pb-5 mt-4">
                                <div class="col-4">
                                    <button id="restartBtn" onclick="restartQuiz()"
                                        style="display: none;">Restart Quiz</button>
                                    <div id="score" style="display: none;"></div>
                                </div>
                                <div class="col-4">
                                    <button id="restartBtn2" style="display: none;"> <a
                                            href="./student-content.html"> Back to Home</a> </button>
                                    <div id="score" style="display: none;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- {{ view('frontend.studentdashboard.layouts.course.lessons') }} --}}
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/quiz.js') }}"></script>
    {{-- <script src="./assets/js/student-content.js"></script>
    <script src="./assets/js/placeholder.js"></script> --}}

<script>
    let colors = ['#7b61ff', '#ff6187', '#52ccc5', '#fbba15']
    @foreach ($courses as $course)
        function course{{ $course->id }}()
        {
            let section{{ $course->id }} = document.getElementById('section{{ $course->id }}');
            section{{ $course->id }}.classList.toggle('toggles');
        }
        @foreach ($course->sections as $section)
            function section{{ $section->id }}()
            {
                let courses = document.getElementById('courses');
                let lessons = document.getElementById('lessons');
                let lesson{{ $section->id }} = document.getElementById('lesson{{ $section->id }}');

                lesson{{ $section->id }}.classList.toggle('toggles');
                courses.classList.remove('d-none');
                lessons.classList.add('d-none');
            }
            @foreach($section->lessons as $lesson)
            {
                function lesson{{ $lesson->id }}()
                {
                    let id = {{ $lesson->id }};
                    let courses = document.getElementById('courses');
                    let lessons = document.getElementById('lessons');

                    courses.classList.add('d-none');
                    lessons.classList.remove('d-none');

                    $.ajax({
                        type: "GET",
                        url: "{{ url('get-lesson/') }}/"+id,
                        success: function (response) {
                            let title = document.getElementById('title');
                            let description = document.getElementById('description');

                            title.innerHTML = response.data.lesson.title;
                            description.innerHTML = response.data.lesson.description;
                        }
                    });
                }
            }
            @endforeach
        @endforeach
    @endforeach

    var video = document.getElementById("myVideo");
        var progressBar = document.getElementById("progress-bar");

        // When the video is paused, update the progress bar accordingly
        video.addEventListener("pause", function () {
            var progress = (video.currentTime / video.duration) * 100;
            progressBar.style.width = progress + "%";
            progressBar.setAttribute("aria-valuenow", progress);
        });

        // When the video ends, set the progress bar to 100%
        video.addEventListener("ended", function () {
            progressBar.style.width = "100%";
            progressBar.setAttribute("aria-valuenow", 100);
        });
</script>
