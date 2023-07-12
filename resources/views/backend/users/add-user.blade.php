@extends('backend.layouts.main')

@section('content')

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
