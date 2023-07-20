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
                <div id="drop-one" onclick="dropTwo{{ $course->id }}()" class="">
                    <div class="d-flex ms-4 mt-3">
                        <div class="sub-name ms-2"> <span class="span_tag"> {{ strtoupper($course->title[0]) }} </span> </div>
                        @if(count($course['sections'])>0)
                            <a class="dropdown-toggle ms-2 mt-2 subject" data-toggle="dropdown" href="#" onclick="bio()" aria-expanded="false">
                                {{ $course->title }} <span class="caret"></span></a>
                        @else
                            <a style="color: black" class="ms-2 mt-2 subject" href="#">
                                {{ $course->title }} <span class="caret"></span></a>
                        @endif
                    </div>
                </div>
                <!-- dropdown-two  -->
                <div id="drop-two" class="">
                    <div class="two d-flex flex-column mt-3 pb-3">
                            @foreach($course['sections'] as $mainTopic)
                            {{-- <a class=" ms-2 mt-3 main-topic" href="#">{{$mainTopic->title}}<span class="caret"></span></a> --}}
                            @if(count($mainTopic->lessons)>0)
                                <a class="dropdown-toggle ms-2 mt-3 main-topic " data-toggle="dropdown" href="#" onclick="dropthree()"> {{$mainTopic->title}}
                                    <span class="caret"></span>
                                </a>
                                <!-- dropdown three  -->
                                @if(count($mainTopic->lessons)>0)
                                <div id="drop-three" class="">
                                    @foreach ($mainTopic->lessons as $lesson)
                                        <div class="three d-flex flex-column">
                                            <a class="ms-4 mt-3 px-2" id="sub" href="#" onclick="subTopic()" style=" width: 100%;"> {{ $lesson->title }}
                                                <span class="caret"></span></a>
                                        </div>

                                    @endforeach
                                </div>
                                @endif
                            @else
                                <a class=" ms-2 mt-3 main-topic" href="#">{{$mainTopic->title}}<span class="caret"></span></a>
                            @endif
                                {{-- <a class=" ms-4 mt-3 px-2 " href="#" style=" width: 100%;"> Sub Topic <span class="caret"></span></a> --}}
                            {{-- <a class=" ms-2 mt-3 main-topic" href="#"> Main Topic <span class="caret"></span></a>
                            <a class=" ms-2 mt-3 main-topic" href="#"> Main Topic <span class="caret"></span></a> --}}
                            @endforeach
                        </div>
                </div>
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

<script>
    @foreach ($courses as $course)
        function dropOne'{{ $course->id }}'() {
            document.getElementById("drop-one").classList.toggle("toggles");
            // document.getElementById("drop-one1").classList.toggle("toggles");
            // document.getElementById("drop-one2").classList.toggle("toggles");
            // document.getElementById("drop-one3").classList.toggle("toggles");
            document.getElementById("drop-two").classList.add("toggles")
            // dropTwo()
        }
        function dropTwo'{{ $course->id }}'() {
            document.getElementById("drop-two").classList.toggle("toggles");
        }
        function dropthree'{{ $course->id }}'() {
            document.getElementById("drop-three").classList.toggle("toggles");
        }

        function tag(title)
        {
            return title.charAt(0).toUpperCase();
        }

        $(document).ready(function () {
            $('.span_tag').text( tag('{{ $course->title }}') );
        });
    @endforeach

    function dropthree'{{ $course->id }}'() {
            document.getElementById("drop-three").classList.toggle("toggles");
        }

    function dropOne() {
            document.getElementById("drop-one").classList.toggle("toggles");
            document.getElementById("drop-one1").classList.toggle("toggles");
            document.getElementById("drop-one2").classList.toggle("toggles");
            document.getElementById("drop-one3").classList.toggle("toggles");
            document.getElementById("drop-two").classList.add("toggles")
            // dropTwo()
        }


</script>
