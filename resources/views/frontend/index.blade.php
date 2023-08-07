@extends('frontend.layouts.main')

@section('content')
<div>
  <!-- NavBar Code -->
  <div>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="/"><img src="./assets/images/Group 6.png" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav"></div>
          <ul class="navbar-nav">
            {{-- <li class="nav-item">
              <a class="nav-link" href="./student-dashboard.html"><span>student-dashboard</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./admin-dashboard.html"><span>Admin-dashboard</span></a>
            </li> --}}
            <li class="nav-item">
              <div class="dropdown">
                <div class="language-div dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                  <div>
                    <i class="bi bi-globe"></i>
                  </div>
                  <div class="language">
                    <span id="lang-select" data-translate="lang"> </span>
                  </div>
                  <div><i class="bi bi-chevron-down"></i></div>
                </div>
                <ul class="dropdown-menu" style="left: -5px;top: 40px;" aria-labelledby="dropdownMenu2">
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
              </div>
            </li>

            @if(!Auth::check())
                <li class="nav-item left-line">
                <a class="nav-link" href="{{ route('login') }}">
                    <span data-translate="log-in">Log In</span>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{ route('signup-page') }}">
                    <button data-translate="sign-up">Sign Up</button>
                </a>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{ route('studentdashboard.student-dashboard') }}">
                        <button data-translate="sign-up">Dashboard</button>
                    </a>
                </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- Section 1 -->
  <div>
    <div class="container section-1">
      <div class="text-container">
        <div class="back-images d-flex justify-content-between ps-5">
          <img class="start" src="./assets/images/StarFour.png" alt="" />
          <img class="mid" src="./assets/images/Ellipse 4.png" alt="" />
          <img class="last" src="./assets/images/Sparkle.png" alt="" />
        </div>
        <div class="text-line-1">
          <span data-translate="heading-1">Lorem ipsum dolor sit amet</span>
        </div>
        <div class="text-line-2">
          <span data-translate="heading-2">consectetur </span>
        </div>
        <div class="text-line-3">
          <span>
            Lorem ipsum dolor sit amet consectetur. Id nec et sollicitudin
            ac diam quis quisque cras. Rhoncus tempus nam sed adipiscing.
          </span>
        </div>
        <div class="button-section">
          <div class="button-1">
            <button class="signu-up">
              <a href="./signup.html" data-translate="sign-up"> Sign Up </a>
            </button>
          </div>
          <div class="button-2">
            <button class="signu-up">
              <a href="./student-content.html" data-translate="view-courses">
                View Courses
              </a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 2 -->
  <div>
    <div class="section-2">
      <div class="container">
        <div class="section-2-main">
          <div class="section-left">
            <img src="./assets/images/Group 124.png" />
          </div>
          <div class="section-right">
            <div class="text-line-1">
              <span class="span-1" data-translate="why">Why</span>
              <span class="span-2" data-translate="subscribe?">
                Subscribe?
              </span>
            </div>
            <div class="text-line-2">
              <span>
                Lorem ipsum dolor sit amet consectetur. Nibh non ac
                tincidunt habitant tellus fermentum vitae. Nec porta urna
                vulputate aliquet neque sagittis elit laoreet. Nibh non ac
                tincidunt habitant
              </span>
            </div>
            <div class="button-line">
              <div class="button-1">
                <button data-translate="subscribe-now">
                  Subscribe Now
                </button>
              </div>
              <div class="button-2">
                <button data-translate="explore-courses">
                  Explore Courses
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 3 -->
  <div>
    <div class="section-3">
      <div class="container">
        <div class="section-3-main">
          <div class="section-left">
            <div class="text-line-1">
              <span data-translate="online-lectures">Online Lectures</span>
            </div>
            <div class="text-line-2">
              <span>
                Lorem ipsum dolor sit amet consectetur. Nibh non ac
                tincidunt habitant tellus fermentum vitae. Nec porta urna
                vulputate aliquet neque sagittis elit laoreet. Nibh non ac
                tincidunt habitant
              </span>
            </div>
          </div>
          <div class="section-right">
            <img src="./assets/images/Group 310.png" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 4 -->
  <div>
    <div class="section-4">
      <div class="container">
        <div class="section-4-main">
          <div class="section-left">
            <img src="./assets/images/planning-schedule-time-management-with-stopwatch-man-with-tablet_108855-1986 1.png" />
          </div>
          <div class="section-right">
            <div class="text-line-1">
              <span data-translate="any-time-any-where">
                Any Time, Any Where
              </span>
            </div>
            <div class="text-line-2">
              <span>
                Lorem ipsum dolor sit amet consectetur. Nibh non ac
                tincidunt habitant tellus fermentum vitae. Nec porta urna
                vulputate aliquet neque sagittis elit laoreet. Nibh non ac
                tincidunt habitant
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 5 -->
  <div>
    <div class="section-5">
      <div class="container">
        <div class="section-5-main">
          <div class="section-left">
            <div class="text-line-1">
              <span data-translate="solved-papers">Solve Papers</span>
            </div>
            <div class="text-line-2">
              <span>
                Lorem ipsum dolor sit amet consectetur. Nibh non ac
                tincidunt habitant tellus fermentum vitae. Nec porta urna
                vulputate aliquet neque sagittis elit laoreet. Nibh non ac
                tincidunt habitant
              </span>
            </div>
          </div>
          <div class="section-right">
            <img src="./assets/images/3d-illustration-pen-putting-blue-ticks-paper 1.png" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 6 -->
  <div>
    <div class="section-6">
      <div class="container">
        <div class="section-6-main">
          <div class="section-left">
            <img src="./assets/images/data_management_7 1.png" />
          </div>
          <div class="section-right">
            <div class="text-line-1">
              <span data-translate="collection-of-courses">
                Collection of Courses
              </span>
            </div>
            <div class="text-line-2">
              <span>
                Lorem ipsum dolor sit amet consectetur. Nibh non ac
                tincidunt habitant tellus fermentum vitae. Nec porta urna
                vulputate aliquet neque sagittis elit laoreet. Nibh non ac
                tincidunt habitant
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 7 -->
  <div>
    <div class="section-7">
      <div class="container section-title">
        <div class="text-line-1">
          <span class="span-1" data-translate="student">Student</span>
          <span class="span-2" data-translate="feedback">Feedback</span>
        </div>
        <div class="text-line-2">
          <span>
            Lorem ipsum dolor sit amet consectetur. Feugiat id imperdiet mi
          </span>
        </div>
      </div>
      <div class="container swiper">
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
              <div class="card-head">
                <div class="profile-content">
                  <div>
                    <img src="./assets/profile-images/profile1.jpg" alt="" class="card-img" />
                  </div>
                  <div>
                    <div class="text-line-1">
                      <span>David Dell</span>
                    </div>
                    <div class="text-line-2">
                      <span data-translate="student">Student</span>
                    </div>
                  </div>
                </div>
                <div class="icon-colon">
                  <img src="./assets/images/Vector2.png" alt="" />
                </div>
              </div>

              <div class="card-content">
                <p>
                  Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros
                  pharetra. Nam sed imperdiet turpis. In hac habitasse
                  platea dictumst. Praesent nulla massa, hendrerit
                  vestibulum gravida in, feugiat auctor felis.
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="card-head">
                <div class="profile-content">
                  <div>
                    <img src="./assets/profile-images/profile2.jpg" alt="" class="card-img" />
                  </div>
                  <div>
                    <div class="text-line-1">
                      <span>David Dell</span>
                    </div>
                    <div class="text-line-2">
                      <span data-translate="student">Student</span>
                    </div>
                  </div>
                </div>
                <div class="icon-colon">
                  <img src="./assets/images/Vector2.png" alt="" />
                </div>
              </div>

              <div class="card-content">
                <p>
                  Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros
                  pharetra. Nam sed imperdiet turpis. In hac habitasse
                  platea dictumst. Praesent nulla massa, hendrerit
                  vestibulum gravida in, feugiat auctor felis.
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="card-head">
                <div class="profile-content">
                  <div>
                    <img src="./assets/profile-images/profile3.jpg" alt="" class="card-img" />
                  </div>
                  <div>
                    <div class="text-line-1">
                      <span>David Dell</span>
                    </div>
                    <div class="text-line-2">
                      <span data-translate="student">Student</span>
                    </div>
                  </div>
                </div>
                <div class="icon-colon">
                  <img src="./assets/images/Vector2.png" alt="" />
                </div>
              </div>

              <div class="card-content">
                <p>
                  Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros
                  pharetra. Nam sed imperdiet turpis. In hac habitasse
                  platea dictumst. Praesent nulla massa, hendrerit
                  vestibulum gravida in, feugiat auctor felis.
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="card-head">
                <div class="profile-content">
                  <div>
                    <img src="./assets/profile-images/profile4.jpg" alt="" class="card-img" />
                  </div>
                  <div>
                    <div class="text-line-1">
                      <span>David Dell</span>
                    </div>
                    <div class="text-line-2">
                      <span>Student</span>
                    </div>
                  </div>
                </div>
                <div class="icon-colon">
                  <img src="./assets/images/Vector2.png" alt="" />
                </div>
              </div>

              <div class="card-content">
                <p>
                  Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros
                  pharetra. Nam sed imperdiet turpis. In hac habitasse
                  platea dictumst. Praesent nulla massa, hendrerit
                  vestibulum gravida in, feugiat auctor felis.
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="card-head">
                <div class="profile-content">
                  <div>
                    <img src="./assets/profile-images/profile5.jpg" alt="" class="card-img" />
                  </div>
                  <div>
                    <div class="text-line-1">
                      <span>David Dell</span>
                    </div>
                    <div class="text-line-2">
                      <span data-translate="student">Student</span>
                    </div>
                  </div>
                </div>
                <div class="icon-colon">
                  <img src="./assets/images/Vector2.png" alt="" />
                </div>
              </div>

              <div class="card-content">
                <p>
                  Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros
                  pharetra. Nam sed imperdiet turpis. In hac habitasse
                  platea dictumst. Praesent nulla massa, hendrerit
                  vestibulum gravida in, feugiat auctor felis.
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="card-head">
                <div class="profile-content">
                  <div>
                    <img src="./assets/profile-images/profile6.jpg" alt="" class="card-img" />
                  </div>
                  <div>
                    <div class="text-line-1">
                      <span>David Dell</span>
                    </div>
                    <div class="text-line-2">
                      <span data-translate="student">Student</span>
                    </div>
                  </div>
                </div>
                <div class="icon-colon">
                  <img src="./assets/images/Vector2.png" alt="" />
                </div>
              </div>

              <div class="card-content">
                <p>
                  Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros
                  pharetra. Nam sed imperdiet turpis. In hac habitasse
                  platea dictumst. Praesent nulla massa, hendrerit
                  vestibulum gravida in, feugiat auctor felis.
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="card-head">
                <div class="profile-content">
                  <div>
                    <img src="./assets/profile-images/profile7.jpg" alt="" class="card-img" />
                  </div>
                  <div>
                    <div class="text-line-1">
                      <span>David Dell</span>
                    </div>
                    <div class="text-line-2">
                      <span data-translate="student">Student</span>
                    </div>
                  </div>
                </div>
                <div class="icon-colon">
                  <img src="./assets/images/Vector2.png" alt="" />
                </div>
              </div>

              <div class="card-content">
                <p>
                  Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros
                  pharetra. Nam sed imperdiet turpis. In hac habitasse
                  platea dictumst. Praesent nulla massa, hendrerit
                  vestibulum gravida in, feugiat auctor felis.
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="card-head">
                <div class="profile-content">
                  <div>
                    <img src="./assets/profile-images/profile8.jpg" alt="" class="card-img" />
                  </div>
                  <div>
                    <div class="text-line-1">
                      <span>David Dell</span>
                    </div>
                    <div class="text-line-2">
                      <span data-translate="student">Student</span>
                    </div>
                  </div>
                </div>
                <div class="icon-colon">
                  <img src="./assets/images/Vector2.png" alt="" />
                </div>
              </div>

              <div class="card-content">
                <p>
                  Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros
                  pharetra. Nam sed imperdiet turpis. In hac habitasse
                  platea dictumst. Praesent nulla massa, hendrerit
                  vestibulum gravida in, feugiat auctor felis.
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="card-head">
                <div class="profile-content">
                  <div>
                    <img src="./assets/profile-images/profile9.jpg" alt="" class="card-img" />
                  </div>
                  <div>
                    <div class="text-line-1">
                      <span>David Dell</span>
                    </div>
                    <div class="text-line-2">
                      <span data-translate="student">Student</span>
                    </div>
                  </div>
                </div>
                <div class="icon-colon">
                  <img src="./assets/images/Vector2.png" alt="" />
                </div>
              </div>

              <div class="card-content">
                <p>
                  Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros
                  pharetra. Nam sed imperdiet turpis. In hac habitasse
                  platea dictumst. Praesent nulla massa, hendrerit
                  vestibulum gravida in, feugiat auctor felis.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>

  <!-- Section 8 -->
  <div>
    <div class="section-8">
      <div class="container">
        <div class="section-8-main">
          <div class="text-line-1 d-flex justify-content-center">
            <span data-translate="join-us-today!">Join Us Today!</span>
          </div>
          <div class="text-line-2">
            <span>
              Lorem ipsum dolor sit amet consectetur. Faucibus feugiat
              adipiscing nibh in aliquam viverra volutpat viverra.
            </span>
          </div>
          <div>
            <a href="./signup.html">
              <button data-translate="sign-up">Sign Up</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer code -->
  <div>
    <footer>
      <div class="footer-line-1">
        <div>
          <a>
            <span class="border-class" data-translate="careers">
              Careers
            </span>
          </a>
        </div>
        <div>
          <a href="./privacy-policy.html">
            <span class="border-class" data-translate="privacy-policy">
              Privacy Policy
            </span>
          </a>
        </div>
        <div>
          <a href="./terms-conditions.html">
            <span data-translate="terms-conditions">
              Terms & Conditions
            </span>
          </a>
        </div>
      </div>
      <div class="footer-line-2">
        <div>
          <span>© 2023 Anjez Inc. </span>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection
