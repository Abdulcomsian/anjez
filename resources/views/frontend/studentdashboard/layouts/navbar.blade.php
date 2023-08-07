<!-- Navbar code -->
<div>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('assets/images/Group 6.png') }}" /></a>
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
                <div class="jane"><span> {{ auth()->user()->first_name ?? 'Student' }} </span></div>
                <div>
                    <i class="bi bi-chevron-down" onclick="$('.dropdown-menu').toggleClass('d-block')"></i>
                    <div class="dropdown">
                        {{-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown button
                        </button> --}}
                        <div class="dropdown-menu" style="left: -100px;top: 40px;" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="{{ route('logout') }}"><i class="bi bi-arrow-return-left"></i>Logout</a>
                        </div>
                      </div>
                </div>
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
