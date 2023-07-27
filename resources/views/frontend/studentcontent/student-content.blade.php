@extends('frontend.studentcontent.layouts.main')

@section('content')

<!-- Navbar code -->
{{-- <div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('studentcontent.student-content') }}"><img src="{{ url('assets/images/Group 6.png') }}" /></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <i class="bi bi-bell-fill" style="color: #7e5bf6"></i>
        </li>
        <li class="nav-item">
            <div class="profile-content">
                <div>
                    <img src="{{ url('assets/profile-images/profile1.jpg') }}" alt="" />
                </div>
                <div class="jane"><span> Jane Doe </span></div>
                <div><i class="bi bi-chevron-down"></i></div>
            </div>
        </li>
        <li class="nav-item">
            <div class="language-change">
                <div>
                    <i class="bi bi-globe"></i>
                </div>
                <div class="jane"><span> English </span></div>
                <div><i class="bi bi-chevron-down"></i></div>
            </div>
        </li>
    </ul>
</div>
</div>
</nav>
</div> --}}

<!-- Side-Navbar -->

{{-- <div class="container-fluid mt-1"> --}}
{{-- <div class="row flex-nowrap" style="min-height: 100vh;"> --}}


{{-- <div class="col-auto col-md-3 col-xl-2 px-0 bg-white">
                    <div class="d-flex flex-column align-items-center align-items-sm-start pt-2 text-white">
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100 mt-3"
                            id="menu">
                            <li class="nav-item w-100 px-lg-3 px-sm-0 mt-2 ">
                                <a href="#" class="nav-link align-middle d-flex">
                                    <!-- <i class="fs-5 bi-house menu-item-icon" style="color: black;"></i> -->
                                    <div class="icon"><img src="{{ url('assets/images/sidebar-icon.png') }}" alt=""></div>
<span class="ms-2 d-none d-sm-inline font-noto-sans" style="color: black;">
    Dashboard
</span>
</a>
</li>
<div class="one" onclick="dropOne()">
    <li class="dropdown font-noto-sans  nav-item  w-100 px-lg-3 px-sm-0 mt-3 ms-3 " onclick="dropOne()">
        <img src="{{ url('assets/images/corses icon.png') }}" alt="" onclick="dropOne()">
        <a class="dropdown-toggle ms-2 " data-toggle="dropdown" href="#" onclick="dropOne()"> Courses <span class="caret"></span></a>
    </li>
</div>

<!-- dropdown-one  -->
<div id="drop-one" onclick="dropTwo()">
    <div class="d-flex ms-4 mt-3">
        <div class="sub-name ms-2"> <span> B </span> </div>
        <a class="dropdown-toggle ms-2 mt-2 subject" data-toggle="dropdown" href="#" onclick="bio()">
            Biology <span class="caret"></span></a>
    </div>

</div>
<!-- dropdown-two  -->
<div id="drop-two">
    <div class="two d-flex flex-column mt-3 pb-3">
        <a class=" ms-2 mt-3 main-topic" href="#"> Main Topic<span class="caret"></span></a>
        <a class="dropdown-toggle ms-2 mt-3 main-topic " data-toggle="dropdown" href="#" onclick="dropthree()"> Main Topic
            <span class="caret"></span>
        </a>
        <!-- dropdown three  -->
        <div id="drop-three" class="toggles">
            <div class="three d-flex flex-column">
                <a class=" ms-4 mt-3 px-2" id="sub" href="#" onclick="subTopic()" style=" width: 100%;"> Sub Topic
                    <span class="caret"></span></a>
                <a class=" ms-4 mt-3 px-2 " href="#" style=" width: 100%;"> Sub Topic <span class="caret"></span></a>
            </div>
        </div>
        <a class=" ms-2 mt-3 main-topic" href="#"> Main Topic <span class="caret"></span></a>
        <a class=" ms-2 mt-3 main-topic" href="#"> Main Topic <span class="caret"></span></a>
    </div>
</div>


<div id="drop-one1">
    <div class="d-flex ms-4 mt-3">
        <div class="sub-name1 ms-2"> <span> M </span> </div>
        <a class="dropdown-toggle ms-2 mt-2 subject" data-toggle="dropdown" href="#">
            Mathematics <span class="caret"></span></a>
    </div>
</div>
<div id="drop-one2">
    <div class="d-flex ms-4 mt-3">
        <div class="sub-name2 ms-2"> <span> P </span> </div>
        <a class="dropdown-toggle ms-2 mt-2 subject" data-toggle="dropdown" href="#">
            Physics <span class="caret"></span></a>
    </div>
</div>
<div id="drop-one3">
    <div class="d-flex ms-4 mt-3">
        <div class="sub-name3 ms-2"> <span> C </span> </div>
        <a class="dropdown-toggle ms-2 mt-2 subject" data-toggle="dropdown" href="#">
            Chemistry <span class="caret"></span></a>
    </div>
</div>
</ul>
</div>
</div> --}}

<script>
    function dropOne() {
        document.getElementById("drop-one").classList.toggle("toggles");
        document.getElementById("drop-one1").classList.toggle("toggles");
        document.getElementById("drop-one2").classList.toggle("toggles");
        document.getElementById("drop-one3").classList.toggle("toggles");
        document.getElementById("drop-two").classList.add("toggles")
        // dropTwo()
    }

    function dropTwo() {
        document.getElementById("drop-two").classList.toggle("toggles");
    }

    function dropthree() {
        document.getElementById("drop-three").classList.toggle("toggles");
    }
</script>

<!-- right side content  -->
<div class="col py-3 pb-5 " id="student-content">
    <div class="student-content">
        <div class="row d-flex justify-content-between">
            <div class="col  d-flex justify-content-start">
                <div class="subject-heading"> Biology </div>
            </div>
            <div class="col d-flex justify-content-end">
                <div class="py-2">
                    <input type="text" class="icons py-1  " value placeholder="Search">
                </div>
            </div>
        </div>
        <div class="row flex-column">
            <div class="col-7 textss text-start ">
                <span>Subscribe now to unlock a world of knowledge and never miss out
                    on our latest updates, lessons, and exclusive content.</span>
            </div>
            <div class="col mt-3"> <button class="px-4" type="button"> <a href="{{ route('payments') }}">
                        Subscribe </a> </button></div>
        </div>
        <div class="contents px-4 mt-4 pt-1">
            <div class="contents-heading d-flex justify-content-center mt-4 "> Contents </div>
            <div class="row mt-4">
                <div class="col py-2">
                    <p>Lesson 1 - Lorem ipsum dolor sit amet</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="cate mt-2 ">
                        <p>Free</p>
                    </div>
                </div>
                <div class="col py-2">
                    <p>Lesson 2 - Lorem ipsum dolor sit amet</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="cate-2 mt-2">
                        <img src="{{ url('assets/images/crown.png') }}" alt="">
                    </div>
                </div>
                <div class="col py-2">
                    <p>Lesson 3 - Lorem ipsum dolor sit amet</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="cate-2 mt-2">
                        <img src="{{ url('assets/images/crown.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col py-2">
                    <p>Lesson 4 - Lorem ipsum dolor sit amet</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="cate-2 mt-2">
                        <img src="{{ url('assets/images/crown.png') }}" alt="">
                    </div>
                </div>
                <div class="col py-2">
                    <p>Lesson 5 - Lorem ipsum dolor sit amet</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="cate-2 mt-2">
                        <img src="{{ url('assets/images/crown.png') }}" alt="">
                    </div>
                </div>
                <div class="col py-2">
                    <p>Lesson 6 - Lorem ipsum dolor sit amet</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="cate-2 mt-2">
                        <img src="{{ url('assets/images/crown.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col py-2">
                    <p>Lesson 7 - Lorem ipsum dolor sit amet</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="cate-2 mt-2">
                        <img src="{{ url('assets/images/crown.png') }}" alt="">
                    </div>
                </div>
                <div class="col py-2">
                    <p>Lesson 8 - Lorem ipsum dolor sit amet</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="cate-2 mt-2">
                        <img src="{{ url('assets/images/crown.png') }}" alt="">
                    </div>
                </div>
                <div class="col pb-5 py-2">
                    <p>Lesson 9 - Lorem ipsum dolor sit amet</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="cate-2 mt-2">
                        <img src="{{ url('assets/images/crown.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- lesson videos lectures  -->
<div class="col py-3 dis" id="lectures">
    <div class="lecture">
        <div class="upss pb-3 px-3" style="background-color: white;">
            <div class="row pt-4 pb-2">
                <div class="col ">
                    <span> Lesson 1 - Lorem Ipsum dolor sit amet </span>
                </div>
                <div class="col me-5">
                    <div class="cates  ">
                        <p>Free</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Lorem ipsum dolor sit amet consectetur. Nec malesuada purus</p>
                </div>
            </div>
            <div class="progress">
                <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="embed-responsive embed-responsive-21by9 mt-4" id="video-container">
            <video id="myVideo" class="embed-responsive-item" src="./assets/videos/THAILAND IN 30 SECONDS - CINEMATIC VIDEO- 4k.mp4" controls></video>
            <button type="button" id="video-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Test Your Knowledge</button>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="dropdown">
                    <button class="btn attach dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Course Attachments
                    </button>
                    <div class="dropdown-menu pe-5" aria-labelledby="dropdownMenuButton">
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
                            <p class="m-auto"><span id="currQuesNum"></span> / <span id="totalQuesNum"></span></p>
                            <div class="question m-auto" id="ques"></div>
                        </div>

                        <div class="options mt-5" id="opt"></div>
                        <div class="modal-footer d-flex flex-column justify-content-center">
                            <button onclick="checkAns()" id="btn"></button>
                        </div>
                        <div class="row d-flex justify-content-center pb-5 mt-4">
                            <div class="col-4">
                                <button id="restartBtn" onclick="restartQuiz()" style="display: none;">Restart Quiz</button>
                                <div id="score" style="display: none;"></div>
                            </div>
                            <div class="col-4">
                                <button id="restartBtn2" style="display: none;"> <a href="./student-content.html"> Back to Home</a> </button>
                                <div id="score" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="{{asset('assets/js/quiz.js')}}"></script>
<script src="{{asset('assets/js/student-content.js')}}"></script>
<script src="{{asset('assets/js/placeholder.js')}}"></script>

<!--  video button to show when video going to end  -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var video = document.getElementById('myVideo');
        var button = document.getElementById('video-button');

        video.addEventListener('timeupdate', function() {
            var currentTime = video.currentTime;
            var duration = video.duration;

            // Display the button when the video is almost at the end
            if (duration - currentTime <= 5) {
                button.style.display = 'block';
            } else {
                button.style.display = 'none';
            }
        });
    });
</script>
<!-- for video progress bar  -->
<script>
    var video = document.getElementById("myVideo");
    var progressBar = document.getElementById("progress-bar");

    // When the video is paused, update the progress bar accordingly
    video.addEventListener("pause", function() {
        var progress = (video.currentTime / video.duration) * 100;
        progressBar.style.width = progress + "%";
        progressBar.setAttribute("aria-valuenow", progress);
    });

    // When the video ends, set the progress bar to 100%
    video.addEventListener("ended", function() {
        progressBar.style.width = "100%";
        progressBar.setAttribute("aria-valuenow", 100);
    });
</script>

<script>
    function subTopic() {
        document.getElementById("student-content").classList.add("dis");
        document.getElementById("lectures").classList.remove("dis")
        document.getElementById("sub").classList.add("actives")
    }

    function bio() {
        document.getElementById("student-content").classList.remove("dis");
        document.getElementById("lectures").classList.add("dis")
        document.getElementById("sub").classList.remove("actives")
        dropTwo()

    }
</script>
@endsection