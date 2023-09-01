<div>
  <!-- Navbar code -->
  <div>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('assets/images/Group 6.png') }}" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav">
            @if (Auth::check())
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
            @endif
            <li class="nav-item">
              <div class="dropdown">
                <div class="language-div dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                  <div>
                    <i class="bi bi-globe"></i>
                  </div>
                  <div class="language">
                    <span id="lang-select" data-translate="lang"> English </span>
                  </div>
                  <div><i class="bi bi-chevron-down"></i></div>
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li id="lang-eng">
                    <a class="eng_btn_bg" rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                      English
                    </a>
                  </li>
                  <li id="lang-ar">
                    <a class="eng_btn_bg" rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                      Arabic
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            @if(!Auth::check())
            <li class="nav-item left-line">
              <a class="nav-link" href="{{ route('login') }}">
                <span data-translate="log-in">{{ __('lang.navbar.login') }}</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('signup-page') }}">
                <button data-translate="sign-up">{{ __('lang.navbar.signup') }}</button>
              </a>
            </li>
            @else

            <li class="nav-item">
              @if(Auth::user()->id==1)
              <a href="{{ route('admindashboard.admin-index') }}">
                @else
                <a href="{{ route('studentdashboard.student-dashboard') }}">
                  @endif
                  <button data-translate="sign-up">Dashboard</button>
                </a>

            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>


<script>
  function updateTextLanguage() {
    const path = window.location.pathname;
    const langSelectElement = document.getElementById('lang-select');

    const splits = path.split('/')
    if (splits[1] === 'en') {
      langSelectElement.textContent = 'English ';
      document.getElementById("lang-eng").classList.add('active-dropdown-item')
    } else if (splits[1] === 'ar') {
      langSelectElement.textContent = 'Arabic ';
      document.getElementById("lang-ar").classList.add('active-dropdown-item')
    }
  }
  window.addEventListener('load', updateTextLanguage);
</script>