<div class="container-fluid mt-1">
    <div class="row flex-nowrap" style="min-height: 100vh;">
 <div class="col-auto col-md-3 col-xl-2 px-0 bg-white">
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
                <li class="dropdown font-noto-sans  nav-item  w-100 px-lg-3 px-sm-0 mt-3 ms-3 "
                    onclick="dropOne()">
                    <img src="{{ url('assets/images/corses icon.png') }}" alt="" onclick="dropOne()">
                    <a class="dropdown-toggle ms-2 " data-toggle="dropdown" href="#"
                        onclick="dropOne()"> Courses <span class="caret"></span></a>
                </li>
            </div>

            <!-- dropdown-one  -->
            <div id="drop-one" onclick="dropTwo()">
                <div class="d-flex ms-4 mt-3">
                    <div class="sub-name ms-2"> <span> B </span> </div>
                    <a class="dropdown-toggle ms-2 mt-2 subject" data-toggle="dropdown" href="#"
                        onclick="bio()">
                        Biology <span class="caret"></span></a>
                </div>

            </div>
            <!-- dropdown-two  -->
            <div id="drop-two">
                <div class="two d-flex flex-column mt-3 pb-3">
                    <a class=" ms-2 mt-3 main-topic" href="#"> Main Topic<span class="caret"></span></a>
                    <a class="dropdown-toggle ms-2 mt-3 main-topic " data-toggle="dropdown" href="#"
                        onclick="dropthree()"> Main Topic
                        <span class="caret"></span>
                    </a>
                    <!-- dropdown three  -->
                    <div id="drop-three" class="toggles">
                        <div class="three d-flex flex-column">
                            <a class=" ms-4 mt-3 px-2" id="sub" href="#" onclick="subTopic()"
                                style=" width: 100%;"> Sub Topic
                                <span class="caret"></span></a>
                            <a class=" ms-4 mt-3 px-2 " href="#" style=" width: 100%;"> Sub Topic <span
                                    class="caret"></span></a>
                        </div>
                    </div>
                    <a class=" ms-2 mt-3 main-topic" href="#"> Main Topic <span
                            class="caret"></span></a>
                    <a class=" ms-2 mt-3 main-topic" href="#"> Main Topic <span
                            class="caret"></span></a>
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
</div>


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



    function subTopic()
    {
            document.getElementById("student-content").classList.add("dis");
            document.getElementById("lectures").classList.remove("dis")
            document.getElementById("sub").classList.add("actives")
    }

        function bio()
        {
            document.getElementById("student-content").classList.remove("dis");
            document.getElementById("lectures").classList.add("dis")
            document.getElementById("sub").classList.remove("actives")
            dropTwo()

        }
</script>
