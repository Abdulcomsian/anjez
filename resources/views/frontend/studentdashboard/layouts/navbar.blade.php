<!-- Navbar code
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
                    <i class="bi bi-chevron-down" onclick="$('#logout').toggleClass('d-block')"></i>
                    <div class="dropdown">
                        <div class="dropdown-menu" id="logout" style="left: -160px;top: 40px;" aria-labelledby="dropdownMenuButton">
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
                <div onclick="$('#languages').toggleClass('d-block')"><i class="bi bi-chevron-down"></i></div>
              </div>
              <ul class="dropdown-menu" style="right: 4px;top: 83px;" id="languages" aria-labelledby="dropdownMenu2">
                <li>
                  <button class="dropdown-item" type="button" id="englishButton" onclick="onLangChange('English')">
                    English
                  </button>
                </li>
                <li>
                  <button class="dropdown-item" type="button" id="arabicButton" onclick="onLangChange('Arabic')">
                    Arabic
                  </button>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div> -->









  <div>
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
    <div class="dropdown">
        <div class="language-div dropdown-toggle" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
            <div>
            <div class="profile-content-1">

            </div>
                
            </div>
            <div class="jane">
                <span style="color: #3d474d;">{{ auth()->user()->first_name ?? 'Student' }}</span>
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
                  <a class="eng_btn_bg" rel="alternate"  hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                    English
                </li>
                <li>
                  <a class="eng_btn_bg" rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                    Arabic
                  </a>
                </li>
                      </ul>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>



    <script>
       function updateTextLanguage() {
            const path = window.location.pathname;
            const langSelectElement = document.getElementById('lang-select');

            const splits = path.split('/')
            if (splits[1] === 'en') {
                langSelectElement.textContent = 'English ';
                console.log(path)
            } else if (splits[1] === 'ar') {
              langSelectElement.textContent = 'Arabic ';
            }
        }
        window.addEventListener('load', updateTextLanguage);
    </script>