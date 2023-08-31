@extends('backend.layouts.main')
<style>
  .course >td > img{
    width: 3rem;
    height: 3rem;
  }
  .table thead th {
    vertical-align: bottom;
    border-bottom: 1px solid lightgray !important;
}
</style>
@section('content')
<div id="course" style="display: block;">
    <div class="user mt-5 pb-5" id="main-course">
        <div class="container">
          <div class="row ">
            <div class="col mt-4 d-flex justify-content-start">
              <p class="heading-text  d-flex justify-content-center">Courses</p>
            </div>

            <div class="col d-flex justify-content-end">
                <a  href="{{ route('courses.create') }}">
                <button class="px-2 mt-3 plus" type="button"> + Add New
                Courses
              </button>
            </a>
            </div>
          </div>
          <form method="GET">
              <div class="row aa d-flex justify-content-between"
                style="background-color:  #c4bfff21;  border-radius:0.2rem ;">
                <div class="col-md-5 py-2">
                  <input type="text" class="iconss py-2" name="search" value placeholder="Search by course name">
                </div>
                <div class="col-md-6 py-2 d-flex justify-content-end">
                  <button class="d-flex justify-content-between px-3 pt-2" type="submit"> <img class="pt-1"
                      src="{{ url('assets/images/button icon.png') }}" alt="" style="margin-right: 1%;"> Filter </button>
                      <a href="{{route('courses.index')}}" class="btn btn-danger btn-sm d-flex justify-content-between px-3 pt-2">Remove Filters </a>
                </div>
              </div>
          </form>
          <!-- <hr> -->
<!-- 
           <div class="row courses d-flex justify-content-between">
            <div class="col-1"> <span> ID </span> </div>
            <div class="col-3"> <span> TITLE </span> </div>
            <div class="col-2"> <span>ICON</span></div>
            <div class="col-2"> <span> MAIN TOPIC </span> </div>
            <div class="col-1"><span> Price </span></div>
            <div class="col-2"> <span>STATUS</span></div>
            <div class="col-1"><span>Action</span></div>
          </div>
          <hr class="mt-4">
          @forelse ($courses as $key=>$course)
            <div class="row course mt-2">
                <div class="col-1"> <span> {{ $key+1 }} </span> </div>
                <div class="col-3"> <span style="color: #2572CC;"><a href="{{ route('section.index', ['id'=>$course->id]) }}" style="text-decoration: none"> {{ $course->title ?? '--' }}</a> </span> </div>
                <div class="col-2"> @if(isset($course->feature_image) && !is_null($course->feature_image)) <img src="{{ url('assets/courses-content/course-images/'.$course->feature_image) }}" alt=""> @else <img src="http://via.placeholder.com/640x360" /> @endif </div>
                <div class="col-2"> <span> {{ $course['sections_count'] }} </span> </div>
                <div class="col-1"><span> {{ $course->price }} </span></div>
                <div class="col-2"> @if($course->status == 'Active') <span style="color: #1CB104;">{{ $course->status }}</span> @else <span style="color: #e93e28;"> {{ $course->status }}</span> @endif</div>
                <div class="col-1 dots">
                <div class="dropdown dropdown-quiz">
                    <img class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" src="{{ url('assets/images/dots.png') }}" alt="">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ url('courses/'.$course->id.'/edit') }}">Edit</a>
                    <a class="dropdown-item" href="{{ route('courses.destroy',['id'=>$course->id]) }}">Delete</a>
                    </div>
                </div>
                </div>
            </div>
            @empty
                <div class="col-9"> <span> No Course Found </span> </div>
            @endforelse
        </div>  -->

        <div class="table-responsive">
  <table class="table">
    <thead>
      <tr class="courses">
        <th scope="col" class="py-4">ID</th>
        <th scope="col" class="py-4">TITLE</th>
        <th scope="col" class="py-4">ICON</th>
        <th scope="col" class="py-4">MAIN TOPIC</th>
        <th scope="col" class="py-4">PRICE</th>
        <th scope="col" class="py-4">STATUS</th>
        <th scope="col" class="py-4">ACTION</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($courses as $key => $course)
        <tr class="course ">
          <td><span>{{ $key + 1 }} </span> </td>
          <td>
            <span style="color: #2572CC;"><a href="{{ route('section.index', ['id'=>$course->id]) }}" style="text-decoration: none"> {{ $course->title ?? '--' }}</a> </span> 
          </td>
          <td>
            @if(isset($course->feature_image) && !is_null($course->feature_image))
              <img src="{{ url('assets/courses-content/course-images/'.$course->feature_image) }}" alt="">
            @else
              <img src="http://via.placeholder.com/640x360" alt="">
            @endif
          </td>
          <td> <span>{{ $course['sections_count'] }} </span> </td>
          <td> <span>{{ $course->price }} </span> </td>
          <td>
            @if($course->status == 'Active')
              <span style="color: #1CB104;">{{ $course->status }}</span>
            @else
              <span style="color: #e93e28;">{{ $course->status }}</span>
            @endif
          </td>
          <td>
            <div class="dropdown dropdown-quiz">
              <img class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="{{ url('assets/images/dots.png') }}" alt="">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ url('courses/'.$course->id.'/edit') }}">Edit</a>
                <a class="dropdown-item" href="{{ route('courses.destroy',['id'=>$course->id]) }}">Delete</a>
              </div>
            </div>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="7">No Course Found</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>

      </div>
    </div>
@endsection
