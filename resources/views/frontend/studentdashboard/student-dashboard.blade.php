@extends('frontend.studentdashboard.layouts.main')

@section('content')

    <!-- Navbar code -->
    <div>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="{{ route('studentdashboard.student-dashboard') }}"><img src="{{ url('assets/images/Group 6.png') }}" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <i class="bi bi-bell-fill" style="color: #7e5bf6"></i>
              </li>
              <li class="nav-item">
                <div class="profile-content">
                  <div>
                    <img src="{{ url('assets/profile-images/profile1.jpg') }}" alt="" />
                  </div>
                  <div class="jane"><span> Jane Doe </span></div>
                  <div><i class="bi bi-chevron-down"></i></div>
                </div>
              </li>
              <li class="nav-item">
                <div class="language-change">
                  <div>
                    <i class="bi bi-globe"></i>
                  </div>
                  <div class="jane"><span> English </span></div>
                  <div><i class="bi bi-chevron-down"></i></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- Main Content -->
    <div>
      <div class="main-content">
        <div class="greeting-text">
          <div class="text-line-1">
            <span id="date"></span>
          </div>
          <div class="text-line-2">
            <span> Hi Jane, <span id="greeting"> </span></span>
          </div>
          <div class="text-line-3">
            <span>Lorem ipsum dolor sit amet consectetur. Nibh non ac</span>
          </div>
        </div>

        <div class="subject-list">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8">
              <div class="card sample-card">
                <div class="card-img-container">
                  <img src="./assets/images/8138748 1.png" class="card-img-top img-fluid" alt="..." />
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <div class="text-line-1">
                      <span><a href="{{ url('student-content.html')}}"> Biology </a> </span>
                    </div>
                    <div class="text-line-2">
                      <span>Lorem ipsum dolor sit amet consectetur</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-8">
              <div class="card sample-card">
                <div class="card-img-container">
                  <img src="{{ url('assets/images/8138748 1 (1).png') }}" class="card-img-top img-fluid" alt="..." />
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <div class="text-line-1">
                      <span> Physics </span>
                    </div>
                    <div class="text-line-2">
                      <span>Lorem ipsum dolor sit amet consectetur</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-8">
              <div class="card sample-card">
                <div class="card-img-container">
                  <img src="{{ url('assets/images/8138748 1 (2).png') }}" class="card-img-top img-fluid" alt="..." />
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <div class="text-line-1">
                      <span> Chemistry </span>
                    </div>
                    <div class="text-line-2">
                      <span>Lorem ipsum dolor sit amet consectetur</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-8">
              <div class="card sample-card">
                <div class="card-img-container">
                  <img src="{{ url('assets/images/Frame 1.png') }}" class="card-img-top img-fluid" alt="..." />
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <div class="text-line-1">
                      <span> Computer Science </span>
                    </div>
                    <div class="text-line-2">
                      <span>Lorem ipsum dolor sit amet consectetur</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-8">
            <div class="card sample-card">
              <div class="card-img-container">
                <img src="{{ ('assets/images/8138748 1.png') }}" class="card-img-top img-fluid" alt="..." />
              </div>
              <div class="card-body">
                <div class="card-text">
                  <div class="text-line-1">
                    <span><a href=""> Mathematics </a> </span>
                  </div>
                  <div class="text-line-2">
                    <span>Lorem ipsum dolor sit amet consectetur</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                      aria-valuemax="100" style="width: 75%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-8">
            <div class="card sample-card">
              <div class="card-img-container">
                <img src="./assets/images/8138748 1 (1).png" class="card-img-top img-fluid" alt="..." />
              </div>
              <div class="card-body">
                <div class="card-text">
                  <div class="text-line-1">
                    <span> Physics </span>
                  </div>
                  <div class="text-line-2">
                    <span>Lorem ipsum dolor sit amet consectetur</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                      aria-valuemax="100" style="width: 75%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-8">
            <div class="card sample-card">
              <div class="card-img-container">
                <img src="./assets/images/8138748 1 (2).png" class="card-img-top img-fluid" alt="..." />
              </div>
              <div class="card-body">
                <div class="card-text">
                  <div class="text-line-1">
                    <span> Chemistry </span>
                  </div>
                  <div class="text-line-2">
                    <span>Lorem ipsum dolor sit amet consectetur</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                      aria-valuemax="100" style="width: 75%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-8">
            <div class="card sample-card">
              <div class="card-img-container">
                <img src="./assets/images/Frame 1.png" class="card-img-top img-fluid" alt="..." />
              </div>
              <div class="card-body">
                <div class="card-text">
                  <div class="text-line-1">
                    <span> Computer Science </span>
                  </div>
                  <div class="text-line-2">
                    <span>Lorem ipsum dolor sit amet consectetur</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                      aria-valuemax="100" style="width: 75%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer-code -->

    <script>
      // JavaScript code
      var today = new Date();
      var hour = today.getHours();

      if (hour >= 5 && hour < 12) {
        document.getElementById("greeting").textContent = "Good Morning!";
      } else if (hour >= 12 && hour < 17) {
        document.getElementById("greeting").textContent = "Good Afternoon!";
      } else if (hour >= 17 && hour < 20) {
        document.getElementById("greeting").textContent = "Good Evening!";
      } else {
        document.getElementById("greeting").textContent = "Good Night!";
      }

      var options = { weekday: "long", month: "long", day: "numeric" };
      var date = today.toLocaleDateString(undefined, options);
      document.getElementById("date").textContent = date;
    </script>
@endsection
