@extends('frontend.studentdashboard.layouts.course.main')

@section('content')
<div>
    <!-- Navbar code -->


    <!-- Side-Navbar -->

    <div class="container-fluid mt-1">
        <div class="row flex-nowrap" style="min-height: 100vh;">
            @include('frontend.studentdashboard.layouts.course.sidebar', ['courses'=>$data['courses']])

            <!-- right side content  -->
            <div class="col py-3 pb-5" id="student-content">
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
                            <span>{{ $data['course']->description }}</span>
                        </div>
                        <div class="col mt-3"> <button class="px-4" type="button"> <a href="/payment.html">
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
                                    <img src="{{ asset('assets/courses-content/course-images/crown.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col py-2">
                                <p>Lesson 3 - Lorem ipsum dolor sit amet</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="cate-2 mt-2">
                                    <img src="{{ asset('assets/courses-content/course-images/crown.png') }}" alt="">
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
                                    <img src="{{ asset('assets/courses-content/course-images/crown.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col py-2">
                                <p>Lesson 5 - Lorem ipsum dolor sit amet</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="cate-2 mt-2">
                                    <img src="{{ asset('assets/courses-content/course-images/crown.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col py-2">
                                <p>Lesson 6 - Lorem ipsum dolor sit amet</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="cate-2 mt-2">
                                    <img src="./assets/images/crown.png" alt="">
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
                                    <img src="./assets/images/crown.png" alt="">
                                </div>
                            </div>
                            <div class="col py-2">
                                <p>Lesson 8 - Lorem ipsum dolor sit amet</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="cate-2 mt-2">
                                    <img src="./assets/images/crown.png" alt="">
                                </div>
                            </div>
                            <div class="col pb-5 py-2">
                                <p>Lesson 9 - Lorem ipsum dolor sit amet</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="cate-2 mt-2">
                                    <img src="./assets/images/crown.png" alt="">
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
                        <video id="myVideo" class="embed-responsive-item" src="./assets/videos/THAILAND IN 30 SECONDS - CINEMATIC VIDEO- 4k.mp4" controls=""></video>
                        <button id="video-button" data-toggle="modal" data-target="#exampleModal">Test Your
                            Knowledge</button>

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
                                        <span aria-hidden="true">×</span>
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
    </div>
</div>
@endsection
