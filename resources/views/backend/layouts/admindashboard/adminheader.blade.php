<div>
    <!-- Navbar code -->
    <div>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/AdminDashboard') }}"><img src="{{ url('assets/images/Group 6.png') }}" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <!-- <li class="nav-item">
                <i class="bi bi-bell-fill" style="color: #7e5bf6"></i>
              </li>
              <li class="nav-item">
                <div class="profile-content">
                  <div>
                    <img src="{{ url('assets/profile-images/profile1.jpg') }}" alt="" />
                  </div>
                  <div class="jane"><span> {{ auth()->user()->first_name ?? 'Admin' }} </span></div>
                  {{-- <div><i class="bi bi-chevron-down"></i></div> --}}
                  <div>
                    <i class="bi bi-chevron-down" onclick="$('#logout').toggleClass('d-block')"></i>
                    <div class="dropdown">
                        <div class="dropdown-menu" id="logout" style="left: -160px;top: 40px;" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="{{ route('logout') }}"><i class="bi bi-arrow-return-left"></i>Logout</a>
                        </div>
                      </div>
                </div>
                </div>
              </li> -->

<li class="nav-item">
    <div class="dropdown">
        <div class="language-div dropdown-toggle" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
            <div>
            <div class="profile-content-1">
              <!-- <img src="{{ url('assets/profile-images/vector.jpg') }}" alt="Profile Image" /> -->
            </div>
                
            </div>
            <div class="jane">
                <span style="color: #3d474d;">{{ auth()->user()->first_name ?? 'Admin' }}</span>
            </div>
            <div><i class="bi bi-chevron-down"></i></div>
        </div>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="left: 0; top: 74%;">
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}">
                    <i class="bi bi-arrow-return-left"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</li>

              <!-- <li class="nav-item">
              <div class="language-change">
                <div>
                  <i class="bi bi-globe"></i>
                </div>
                <div class="jane"><span> English </span></div>
                <div>
                    <li class="bi bi-chevron-down"  onclick="$('#langauges').toggleClass('d-block')">
                        <div class="dropdown">
                            <div class="dropdown-menu" id="langauges" style="left: -160px;top: 40px;" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">English</a>
                              <a class="dropdown-item" href="#">Arabic</a>
                            </div>
                        </div>

                    </li>
                </div>
              </div>
            </li> -->

            <li class="nav-item">
                  <div class="dropdown">
                      <div class="language-div dropdown-toggle" id="dropdownMenu2"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          <div>
                              <i class="bi bi-globe"></i>
                          </div>
                          <div class="language">
                              <span id="lang-select" data-translate="lang"> English </span>
                          </div>
                          <div><i class="bi bi-chevron-down"></i></div>
                      </div>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <li>
                              <button class="dropdown-item" type="button" id="englishButton">
                                  English
                              </button>
                          </li>
                          <li>
                              <button class="dropdown-item" type="button" id="arabicButton">
                                  Arabic
                              </button>
                          </li>
                      </ul>
                  </div>
              </li>




            </ul>
          </div>
        </div>
      </nav>
    </div>
