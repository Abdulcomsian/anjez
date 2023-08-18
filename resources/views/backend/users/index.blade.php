@extends('backend.layouts.main')

@section('content')

<!-- users  -->
{{-- <div class="user mt-5 pb-5" id="users" style="display: none;"> --}}
    <div class="user mt-5 pb-5" id="main-user">
    <div class="container ">
      <div class="row ">
        <div class="col mt-4 d-flex justify-content-start">
          <p class="heading-text  d-flex justify-content-center">Users</p>
        </div>
        <div class="col d-flex justify-content-end"> <button class="px-2 mt-3 plus" type="button"
            data-bs-toggle="modal" data-bs-target="#exampleModal"> + Add Users
          </button></div>
      </div>
      <form method="GET">
          <div class="row aa d-flex justify-content-between"
            style="background-color:  #c4bfff21;  border-radius:0.2rem ;">
            <div class="col-md-5 py-2">
              <input type="text" class="iconss py-2" name="search" value placeholder="Search by name">
            </div>
            <div class="col-md-6 py-2 d-flex justify-content-end">
              <button class="d-flex justify-content-between px-3 pt-2" type="submit"> <img class="pt-1"
                  src="{{ url('assets/images/button icon.png') }}" alt="" style="margin-right: 1%;"> Filter </button>
            </div>
          </div>
      </form>
      <hr>
      <div class="row up pt-3">
        <div class="col-2"> Name </div>
        <div class="col-3"> Email </div>
        <div class="col-2"> BILING DATE </div>
        <div class="col-2">STATUS</div>
        <div class="col-2">AMOUNT</div>
        {{-- <div class="col-2">CREATED AT</div> --}}
      </div>
      <hr>
      @forelse ($users as $user)
        <div class="row py-2">
            <div class="col-2" style="word-wrap: break-word;padding-left: 30px;">
                <input class="form-check-input" type="checkbox" value="" id="{{ $user['id'] }}">
                <span class="ms-sm-2 named"> {{ $user->first_name ?? '- -' }}</span>
            </div>
            <div class="col-3 named" style="word-wrap: break-word;"> <span> {{ $user->email ?? '- -' }} </span> </div>
            <div class="col-2 named " style="word-wrap: break-word;"> <span> {{$user->start_date ? date('d/m/Y', strtotime($user->start_date)) : '- -'}} </span> </div>
            <div class="col-2 named" style="word-wrap: break-word;"> @if($user->status == 'active')<span style="color: #7E5BF6;border-radius: 8px;background-color: #9A6CF014;padding: 2px 10px 2px 10px;">  Subscribed </span> @else <span> - - </span> @endif  </div>
            <div class="col-2 fw-bold" style="word-wrap: break-word;"> - - </div>
            {{-- <div class="col-2" style="word-wrap: break-word;"><div class="amount"> {{ $user->created_at ? dateConversion($user->created_at) : '- -' }} </div></div> --}}
        </div>
        <hr>
      @empty
        <div class="col-md-12">No User Found</div>
      @endforelse



    </div>
  </div>


          <!-- user Modal -->
          <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="border: none;">
                  <h5 class="modal-title ps-4 ms-2 mt-4 userd" id="exampleModalLabel">Add User </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="form-container" style="margin-top: -2rem !important;">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="nav-div">
                          <div class="px-5">
                            <label for="firstname" class="form-label">First Name</label>
                            <input style="width: 100%" type="text" name="first_name" class="form-control" id="first_name"
                              placeholder="First Name" />
                          </div>
                        </div>
                        <div class="nav-div">
                          <div class="px-5">
                            <label for="email" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" />
                          </div>
                        </div>
                        <div class="nav-div">
                          <div class="px-5">
                            <label for="Date" class="form-label"> Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
                          </div>
                        </div>
                        <div class="nav-div">
                          <div class="px-5">
                            <label for="" class="form-label">Phone No</label>
                            <input type="text" class="form-control" name="phone_no" placeholder="Phone No" />
                          </div>
                        </div>
                        <div class="nav-div">
                          <div class="px-5">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" />
                          </div>
                        </div>
                        <div class="px-5 mb-5">
                          <button type="submit"> Add User </button>
                        </div>
                      </form>
                </div>
              </div>
            </div>
          </div>

  @endsection
