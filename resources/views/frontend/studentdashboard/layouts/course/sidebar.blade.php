@php
use App\Helpers\Helper;

@endphp
<style>
    .sidebar {
        transition: width 0.3s ease-in-out;
    }

    .navbar-toggler {
        cursor: pointer;
    }

    .sidebar.expanded {
        width: 200px;
    }

    /* @media (max-width: 700px) {
    .sidebar .content {
        display: none;
    }
} */
    @media (min-width: 700px) {
        #newButtonContainer {
            display: none;
        }
    }

    .content .dropdown-toggle::after {
        display: none;
    }

    .caret-arrow {
        background-color: #F7F6FF;
        border: 1px solid #D0D5DD;
        /* padding: 4%; */
        height: 2rem;
        width: 2rem;

        background-position: center center;
        background-repeat: no-repeat;
    }

    .active-dropdown-item {
        background-color: #7E5BF6;
    }

    .active-dropdown-item > a {
        color: white !important;
    }
</style>


<div class="col-auto col-md-3 col-xl-2 px-0 bg-white sidebar" id="sidebar">
    <div class="d-flex flex-column align-items-center align-items-sm-start pt-2 text-white">
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100 mt-3" id="menu">
            <div id="newButtonContainer">
                <div class="navbar-toggler" id="sidebar-toggler " onclick="dd()"> <i class="fa-solid fa-bars" style="color: #903df5;"></i> </div>
            </div>

            <div class="content w-100" id="content">


                <div class="one">
                    <li class="dropdown font-noto-sans d-flex justify-content-between align-items-center nav-item w-100 mt-3 ms-3 open" style="padding-left: 6%; padding-right: 8.6%;">
                        <div>
                            <img src="{{ asset('assets/images/corses icon.png') }}" alt="">
                            <a class="dropdown-toggle ms-2 text-decoration-none abc" data-toggle="dropdown" href="#" aria-expanded="true">
                                {{app()->getLocale() == 'en' ? 'Courses' : 'دروس' }}
                                <!-- <span class="caret"></span> -->
                            </a>
                        </div>
                        <div class="caret-arrow" style="background-image: url('{{ asset('assets/images/Icons.png') }}');" onclick="dropOne(this)"></div>
                    </li>
                </div>
                <div id="all" class=" my-2">
                    <!-- dropdown-one  -->

                    @forelse ($courses as $key=>$course)
                    <?php
                    if ($key >= 4) {
                        $key = 1;
                        ++$key;
                    }
                    ?>
                    <div class="">
                        <div class="d-flex justify-content-between align-items-center" style="padding-left: 6%; padding-right: 3.6%;">
                            <div class="d-flex align-items-center gap-2 my-1">
                                <div class="sub-name{{ $key }} ms-2"> <span class="span_tag"> {{ strtoupper($course->title[0]) }} </span> </div>
                                @if(count($course['sections'])>0)
                                <div>
                                    <a class="dropdown-toggle text-decoration-none subject main-topic-{{ $course->id }}" data-toggle="dropdown" href="{{ route('course.details', ['id'=>encryptParams($course->id)]) }}" aria-expanded="false">
                                        @if (app()->getLocale() == 'ar')
                                        {{ $course->title_ar }}
                                        @else
                                        {{ $course->title }}
                                        @endif
                                        <span class="caret"></span></a>
                                </div>
                                @else
                                <div>
                                    <a style="color: black" class="ms-2 mt-2 subject text-decoration-none" href="#">
                                        @if (app()->getLocale() == 'ar')
                                        {{ $course->title_ar }}
                                        @else
                                        {{ $course->title }}
                                        @endif
                                        <span class="caret"></span></a>
                                </div>
                                @endif
                            </div>
                            <div class="caret-arrow" style="background-image: url('{{ asset('assets/images/Icons.png') }}');" onclick="course(this, {{ $course->id }})"></div>
                        </div>
                    </div>
                    <!-- dropdown-two  -->
                    @if(isset($course->sections) && count($course->sections) > 0)
                    <div id="section{{ $course->id }}" class="py-2">
                        <div class="two d-flex flex-column">
                            @foreach($course['sections'] as $mainTopic)
                            @if(count($mainTopic->lessons) > 0)
                            <div class="d-flex justify-content-between align-items-center" style="padding-right: 4%;">
                                <div>
                                    <a class="dropdown-toggle ms-2 mt-3 text-decoration-none sub-topic-{{ $mainTopic->id }}" data-toggle="dropdown" href="{{ route('course.details', ['id'=>encryptParams($course->id)]) }}">
                                        @if (app()->getLocale() == 'ar')
                                        {{ $mainTopic->title_ar }}
                                        @else
                                        {{ $mainTopic->title }}
                                        @endif
                                        <span class="caret"></span>
                                    </a>
                                </div>

                                <div class="caret-arrow" style="background-image: url('{{ asset('assets/images/Icons.png') }}');" onclick="section(this, {{ $mainTopic->id }})"></div>
                            </div>
                            <!-- dropdown three -->
                            @if(count($mainTopic->lessons) > 0)
                            <div id="lesson{{ $mainTopic->id }}" class="">
                                @php
                                $count = 0;
                                @endphp
                                @foreach ($mainTopic->lessons as $lesson)
                                @php
                                $count++;
                                @endphp
                                @if(Helper::isPaymentActive() || $count == 1)
                                <div class="three d-flex flex-column">
                                    <a class="ms-4 px-2 text-decoration-none" id="sub" href="{{ route('lesson.quizes',['id'=>encryptParams($lesson->id)]) }}" style=" width: inherit;">
                                        @if (app()->getLocale() == 'ar')
                                        {{ $lesson->title_ar }}
                                        @else
                                        {{ $lesson->title }}
                                        @endif
                                        <span class="caret"></span>
                                    </a>
                                </div>
                                @else
                                <div class="three d-flex flex-column">
                                    <a class="ms-4 mt-3 px-2 text-decoration-none" id="sub" href="{{ route('payments') }}" style=" width: 100%;">
                                        @if (app()->getLocale() == 'ar')
                                        {{ $lesson->title_ar }}
                                        @else
                                        {{ $lesson->title }}
                                        @endif
                                        <span class="caret"></span>
                                    </a>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            @endif
                            @else
                            <a class="ms-2 text-decoration-none" href="{{ route('course.details', ['id'=>encryptParams($course->id)]) }}">
                                @if (app()->getLocale() == 'ar')
                                {{ $mainTopic->title_ar }}
                                @else
                                {{ $mainTopic->title }}
                                @endif
                                <span class="caret"></span>
                            </a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    @endif
                    @empty
                    @endforelse
                </div>
            </div>

        </ul>
    </div>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script src="{{ asset('assets/js/quiz.js') }}"></script>
{{-- <script src="./assets/js/student-content.js"></script>
    <script src="./assets/js/placeholder.js"></script> --}}

<script>
    function dropOne(event) {
        if (event.style.backgroundImage.replace(/"/g, '') === "url({{ asset('assets/images/Icons.png') }})") {
            event.style.backgroundImage = "url({{ asset('assets/images/Vector-4.png') }})";
        } else if (event.style.backgroundImage.replace(/"/g, '') === "url({{ asset('assets/images/Vector-4.png') }})") {
            event.style.backgroundImage = "url({{ asset('assets/images/Icons.png') }})";
        }
        document.getElementById("all").classList.toggle("toggles");
    }

    function course(event, id) {
        if (event.style.backgroundImage.replace(/"/g, '') === "url({{ asset('assets/images/Icons.png') }})") {
            event.style.backgroundImage = "url({{ asset('assets/images/Vector-4.png') }})";
        } else if (event.style.backgroundImage.replace(/"/g, '') === "url({{ asset('assets/images/Vector-4.png') }})") {
            event.style.backgroundImage = "url({{ asset('assets/images/Icons.png') }})";
        }
        document.getElementById("section" + id).classList.toggle("toggles");
    }

    function section(event, id) {
        if (event.style.backgroundImage.replace(/"/g, '') === "url({{ asset('assets/images/Icons.png') }})") {
            event.style.backgroundImage = "url({{ asset('assets/images/Vector-4.png') }})";
        } else if (event.style.backgroundImage.replace(/"/g, '') === "url({{ asset('assets/images/Vector-4.png') }})") {
            event.style.backgroundImage = "url({{ asset('assets/images/Icons.png') }})";
        }
        document.getElementById("lesson" + id).classList.toggle("toggles");
    }

    function updateContentVisibility() {
        var contentElement = document.getElementById('content');
        if (window.innerWidth < 700) {
            contentElement.classList.add('d-none');
        } else {
            contentElement.classList.remove('d-none');
        }
    }

    updateContentVisibility();
    window.addEventListener('resize', function() {
        updateContentVisibility();
    });

    function dd() {
        document.getElementById('content').classList.toggle('d-none')
    }
</script>