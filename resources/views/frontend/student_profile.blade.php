@extends('frontend.studentdashboard.layouts.main')

@section('content')
{{-- @dd(auth()->user()) --}}
@php 
$user = auth()->user();
@endphp
<!-- <div class="user mt-5 pb-5" id="course" style="display: none;"> -->
<div>
    <div class="main-content">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <div class="card">
        <div class="card-body">
            <div class="user mt-5 pb-5" id="add-course">
                <div class="container">
                    <div class="row ">
                        <div class="col mt-4 d-flex justify-content-start">
                            <div class="row d-flex flex-column">
                                <div class="col">
                                    <p class="heading-text  ">Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="name" class="form-label">First Name</label>
                                <input type="text" value="{{$user->first_name}}" name="first_name" placeholder="First Name" class="form-control" id="first_name" />
                            </div>
                            <div class="col">
                                <label for="title" class="form-label">Last Name</label>
                                <input type="text" value="{{$user->last_name}}" name="last_name" placeholder="Last Name" class="form-control" id="last_name" />
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" value="{{$user->email}}" name="email" placeholder="Email" class="form-control" id="email" />
                            </div>
                            <div class="col">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" placeholder="Password" class="form-control" id="password" />
                            </div>

                        </div>
                        <div class="btns">
                            <div class="row">
                                <div class="col d-flex justify-content-start gap-4">
                                    <button type="submit" class="add mt-3"> Update </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection