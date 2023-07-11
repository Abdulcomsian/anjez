@extends('backend.layouts.main')

@section('content')

<div class="user mt-5 pb-5" id="course-section">
    <div class="container">
      <div class="row ">
        <div class="col mt-4 d-flex justify-content-start">
          <p class="heading-text  d-flex justify-content-center">Course Section</p>
        </div>
        <div class="col d-flex justify-content-end"> <button class="px-2 mt-3 plus" data-toggle="modal"
            data-target="#exampleModalCenter"> + Add New
            Section</button>
        </div>
      </div>
      <div class="row aa d-flex justify-content-between"
        style="background-color:  #c4bfff21;  border-radius:0.2rem ;">
        <div class="col-md-5 py-2">
          <input type="text" class="iconss py-2" value placeholder="Search by course name">
        </div>
        <div class="col-md-6 py-2 d-flex justify-content-end">
          <button class="d-flex justify-content-between px-3 pt-2" type="submit"> <img class="pt-1"
              src="{{ url('assets/images/button icon.png') }}" alt="" style="margin-right: 1%;"> Filter </button>
        </div>
      </div>
      <hr>
      <div class="row courses d-flex justify-content-between">
        <div class="col-2"> <span> ID </span> </div>
        <div class="col-2"> <span> TITLE </span> </div>
        <div class="col-2"> <span> LESSONS </span> </div>
        <div class="col-2"> <span>STATUS</span></div>
        <div class="col-2"><span>Action</span></div>
      </div>
      <hr class="mt-4">
      <div class="row course d-flex justify-content-between mt-2">
        <div class="col-2"> <span> 1 </span> </div>
        <div class="col-2"> <span> Section-1 </span> </div>
        <div class="col-2"> <span style="color: #2572CC;" onclick="showLessonList()"> <a href="{{ route('lessons.index',['id'=>1]) }}" style="text-decoration: none">Lesson:0</a>  </span> </div>
        <div class="col-2"> <span style="color: #1CB104;">Active</span></div>
        <!-- <div class="col-2 dots"><img src="..../../assets/images/dots.png" alt=""></div> -->
        <div class="col-2 dots">
          <div class="dropdown dropdown-quiz">
            <img class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false" src="{{ url('assets/images/dots.png') }}" alt="">
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Edit</a>
              <a class="dropdown-item" href="#">Delete</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- corurse section modal  -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-5">
        <div class="modal-header">
          <h5 class="modal-title course-heading-text" id="exampleModalLongTitle">Add Lesson</h5>
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col star course">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="firstname" />
              </div>
            </div>
            <div class="row mt-3">
              <div class="col star course">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="firstname" />
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="add mt-3" style="width: 100%;"> Add Section </button>
        </div>
      </div>
    </div>
  </div>

@endsection
