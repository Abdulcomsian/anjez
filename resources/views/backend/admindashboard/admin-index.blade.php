@extends('backend.layouts.main')

@section('content')

<div class="content" id="content">
    <div class="row ">
      <div class=" col-md-4">
        <div class="card mt-5">
          <div class="card-body">
            <div class="icon d-flex justify-content-center">
              <div class="small_div "> <img src="{{ url('assets/images/Group-1.svg') }}" alt="" srcset=""> </div>
            </div>
            <h5 class="card-title d-flex justify-content-center mt-5"> Total Students </h5>
            <p class="card-text d-flex justify-content-center mt-2">{{ $data['students'] ?? 0 }}</p>
          </div>
        </div>
      </div>
    <!-- </div> -->
    <!-- <div class="row"> -->
      <div class="col-md-4">
        <div class="card mt-5">
          <div class="card-body">
            <div class="icon d-flex justify-content-center">
              <div class="small_div "> <img src="{{ url('assets/images/Group 325.svg') }}" alt="" srcset=""> </div>
            </div>
            <h5 class="card-title  d-flex justify-content-center mt-5">Total Courses</h5>
            <p class="card-text  d-flex justify-content-center mt-2">{{ $data['courses'] ?? 0 }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mt-5">
          <div class="card-body">
            <div class="icon d-flex justify-content-center">
              <div class="small_div "> <img src="{{ url('assets/images/Group.svg') }}" alt="" srcset=""> </div>
            </div>
            <h5 class="card-title  d-flex justify-content-center mt-5">Total Subscriptions</h5>
            <p class="card-text  d-flex justify-content-center mt-2">{{ $data['total_subscribers'] ?? 0 }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
