@extends('frontend.layouts.main')

@section('content')
<div>
<!-- NavBar Code -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{url('assets/images/Group 6.png')}}"/a>



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
                <a class="nav-link" href="{{ url('/studentDashboard') }}"><span>student-dashboard</span></a>
                </li>
                <li class="nav-item ">
                <a class="nav-link" href="{{ url('/AdminDashboard') }}"><span>Admin-dashboard</span></a>
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
                <a class="nav-link" href="{{ url('/login') }}"><span>Log In</span></a>
                </li>
                <li class="nav-item">
                <a href="{{ url('/signup') }}"><button>Sign Up</button></a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </div>


      <!-- Section 1 -->
      <div>
        <div class="container section-1">
          <div class="text-container">
            <div class="back-images d-flex justify-content-between ps-5" >
              <img class="start" src="{{ url('assets/images/StarFour.png') }}" alt="">
              <img class="mid" src="{{ url('assets/images/Ellipse 4.png') }}" alt="">
              <img class="last" src="{{ url('assets/images/Sparkle.png') }}" alt="">
            </div>
            <div class="text-line-1">
              <span>Lorem ipsum dolor sit amet</span>
            </div>
            <div class="text-line-2">
              <span>consectetur </span>
            </div>
            <div class="text-line-3">
              <span>
                Lorem ipsum dolor sit amet consectetur. Id nec et sollicitudin
                ac diam quis quisque cras. Rhoncus tempus nam sed adipiscing.
              </span>
            </div>
            <div class="button-section">
              <div class="button-1">
                <button class="signu-up"><a href="{{ url('/signup') }}"> Sign Up </a> </button>
              </div>
              <div class="button-2">
                <button class="signu-up"><a href="{{ url('/studentcontent') }}"> View Courses</a> </button>
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
                <img src="{{ url('assets/images/Group 124.png') }}" />
              </div>
              <div class="section-right">
                <div class="text-line-1">
                  <span>Why <span>Subscribe?</span></span>
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
                  <div class="button-1"><button>Subscribe Now</button></div>
                  <div class="button-2"><button>Explore Courses</button></div>
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
                  <span>Online Lectures</span>
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
                <img src="{{ url('assets/images/Group 310.png') }}" />
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
                <img
                  src="{{ url('assets/images/planning-schedule-time-management-with-stopwatch-man-with-tablet_108855-1986 1.png') }}"
                />
              </div>
              <div class="section-right">
                <div class="text-line-1">
                  <span>Any Time, Any Where</span>
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
                  <span>Solve Papers</span>
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
                <img
                  src="{{ url('assets/images/3d-illustration-pen-putting-blue-ticks-paper 1.png') }}"
                />
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
                <img src="{{ url('assets/images/data_management_7 1.png') }}" />
              </div>
              <div class="section-right">
                <div class="text-line-1">
                  <span>Collection of Courses</span>
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
              <span>Student <span>Feedback</span></span>
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
                        <img
                          src="{{ url('assets/profile-images/profile1.jpg') }}"
                          alt=""
                          class="card-img"
                        />
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
                      <img src="{{ url('assets/images/Vector2.png') }}" alt="" />
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
                        <img
                          src="{{ url('assets/profile-images/profile2.jpg') }}"
                          alt=""
                          class="card-img"
                        />
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
                        <img src="{{ url('assets/images/Vector2.png') }}" alt="" />
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
                        <img
                        src="{{ url('assets/profile-images/profile3.jpg') }}"
                          alt=""
                          class="card-img"
                        />
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
                        <img src="{{ url('assets/images/Vector2.png') }}" alt="" />
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
                        <img
                        src="{{ url('assets/profile-images/profile4.jpg') }}"
                          alt=""
                          class="card-img"
                        />
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
                        <img src="{{ url('assets/images/Vector2.png') }}" alt="" />
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
                        <img
                        src="{{ url('assets/profile-images/profile5.jpg') }}"
                          alt=""
                          class="card-img"
                        />
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
                        <img src="{{ url('assets/images/Vector2.png') }}" alt="" />
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
                        <img
                        src="{{ url('assets/profile-images/profile6.jpg') }}"
                          alt=""
                          class="card-img"
                        />
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
                        <img src="{{ url('assets/images/Vector2.png') }}" alt="" />
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
                        <img
                        src="{{ url('assets/profile-images/profile7.jpg') }}"
                          alt=""
                          class="card-img"
                        />
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
                        <img src="{{ url('assets/images/Vector2.png') }}" alt="" />
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
                        <img
                        src="{{ url('assets/profile-images/profile8.jpg') }}"
                          alt=""
                          class="card-img"
                        />
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
                        <img src="{{ url('assets/images/Vector2.png') }}" alt="" />
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
                        <img
                        src="{{ url('assets/profile-images/profile9.jpg') }}"
                          alt=""
                          class="card-img"
                        />
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
                        <img src="{{ url('assets/images/Vector2.png') }}" alt="" />
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
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
          var swiper = new Swiper(".slide-content", {
            slidesPerView: 2,
            spaceBetween: 25,
            loop: true,
            // centerSlide: "true",
            fade: "true",
            grabCursor: "true",
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
              // dynamicBullets: true,
            },
            autoplay: {
              delay: 2500,
              disableOnInteraction: false,
            },
            breakpoints: {
              0: {
                slidesPerView: 1,
              },
              660: {
                slidesPerView: 1,
              },
              950: {
                slidesPerView: 2,
              },
            },
          });
        </script>
      </div>

      <!-- Section 8 -->
      <div>
        <div class="section-8">
          <div class="container">
            <div class="section-8-main">
              <div class="text-line-1"><span>Join Us Today!</span></div>
              <div class="text-line-2">
                <span>
                  Lorem ipsum dolor sit amet consectetur. Faucibus feugiat
                  adipiscing nibh in aliquam viverra volutpat viverra.
                </span>
              </div>
              <div>
                <a href="{{ url('/signup') }}">
                  <button>Sign Up</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
@endsection
