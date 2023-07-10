{{-- navbar Page
@extends('frontend.layouts.main')


@section('main.container')

      <!-- NavBar Code -->
      <div>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="/"
              ><img src="./assets/images/Group 6.png"
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">

                <li class="nav-item ">
                  <a class="nav-link" href="./student-dashboard.html"><span>student-dashboard</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./admin-dashboard.html"><span>Admin-dashboard</span></a>
                </li>
                <li class="nav-item">
                  <div class="language-change d-flex align-items-center gap-2">
                    <div>
                      <i class="bi bi-globe "></i>
                    </div>
                    <div class="jane"><span > English </span></div>
                    <div><i class="bi bi-chevron-down "></i></div>
                  </div>
                </li>

                <li class="nav-item left-line">
                  <a class="nav-link" href="./login.html"><span>Log In</span></a>
                </li>
                <li class="nav-item">
                  <a href="./signup.html"><button>Sign Up</button></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      @endsection() --}}
