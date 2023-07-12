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
      <div class="row aa d-flex justify-content-between"
        style="background-color:  #c4bfff21;  border-radius:0.2rem ;">
        <div class="col-md-5 py-2">
          <input type="text" class="iconss py-2" value placeholder="Search by name">
        </div>
        <div class="col-md-6 py-2 d-flex justify-content-end">
          <button class="d-flex justify-content-between px-3 pt-2" type="submit"> <img class="pt-1"
              src="{{ url('assets/images/button icon.png') }}" alt="" style="margin-right: 1%;"> Filter </button>
        </div>
      </div>
      <hr>
      <div class="row up pt-3">
        <div class="col-3"> NAME </div>
        <div class="col-3"> EMAIL </div>
        <div class="col-2">BILLING DATE</div>
        <div class="col-2">STATUS</div>
        <div class="col-2">AMOUNT</div>
      </div>
      <hr>
      <div class="row py-2">
        <div class="col-3">
          <!-- <img src="/assets/images/Outline.png" alt=""> -->
          <input type="checkbox">
          <span class="ms-sm-3 named"> Jane Cooper</span>
        </div>
        <div class="col-3 named"> <span> janecooper@gmail.com </span> </div>
        <div class="col-2"> <span> <input type="date" style="width: 94%; border: none;"> </span></div>
        <div class="col-2">
          <div class="subcribe text-center py-1"> Subscribed </div>
        </div>
        <div class="col-2">
          <div class="amount"> $500.00 </div>
        </div>
      </div>
      <hr>
      <div class="row py-2">
        <div class="col-3">
          <!-- <img src="/assets/images/Outline.png" alt=""> -->
          <input type="checkbox">
          <span class="ms-sm-3 named"> Jane Cooper</span>
        </div>
        <div class="col-3 named"> <span> janecooper@gmail.com </span> </div>
        <div class="col-2"> <span> <input type="date" style="width: 94%; border: none;"> </span></div>
        <div class="col-2">
          <div class="subcribe text-center py-1"> Subscribed </div>
        </div>
        <div class="col-2">
          <div class="amount"> $500.00 </div>
        </div>
      </div>
      <hr>
      <div class="row py-2">
        <div class="col-3">
          <!-- <img src="/assets/images/Outline.png" alt=""> -->
          <input type="checkbox">
          <span class="ms-sm-3 named"> Jane Cooper</span>
        </div>
        <div class="col-3 named"> <span> janecooper@gmail.com </span> </div>
        <div class="col-2"> <span> <input type="date" style="width: 94%; border: none;"> </span></div>
        <div class="col-2"> </div>
        <div class="col-2">
          <div class="amount"> $500.00 </div>
        </div>
      </div>
      <hr>
      <div class="row py-2">
        <div class="col-3">
          <!-- <img src="/assets/images/Outline.png" alt=""> -->
          <input type="checkbox">
          <span class="ms-sm-3 named"> Jane Cooper</span>
        </div>
        <div class="col-3 named"> <span> janecooper@gmail.com </span> </div>
        <div class="col-2"> <span> <input type="date" style="width: 94%; border: none;"> </span></div>
        <div class="col-2">
          <div class="subcribe text-center py-1"> Subscribed </div>
        </div>
        <div class="col-2">
          <div class="amount"> $500.00 </div>
        </div>
      </div>
      <hr>
      <div class="row py-2">
        <div class="col-3">
          <input type="checkbox">
          <span class="ms-sm-3 named"> Jane Cooper</span>
        </div>
        <div class="col-3 named"> <span> janecooper@gmail.com </span> </div>
        <div class="col-2"> <span> <input type="date" style="width: 94%; border: none;"> </span></div>
        <div class="col-2"> </div>
        <div class="col-2">
          <div class="amount"> $500.00 </div>
        </div>
      </div>
      <hr>
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
                  <form>
                    <div class="nav-div">
                      <div class="px-5">
                        <label for="firstname" class="form-label">First Name</label>
                        <input style="width: 100%" type="text" class="form-control" id="firstname"
                          placeholder="First Name" />
                      </div>
                    </div>
                    <div class="nav-div">
                      <div class="px-5">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Your Email" />
                      </div>
                    </div>
                    <div class="nav-div">
                      <div class="px-5">
                        <label for="Date" class="form-label"> Date</label>
                        <input type="date" class="form-control" placeholder="DD/MM/YYYY">
                      </div>
                    </div>
                    <div class="nav-div">
                      <div class="px-5">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" placeholder="$ 500" />
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
