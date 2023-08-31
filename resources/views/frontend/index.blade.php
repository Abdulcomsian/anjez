@php
use App\Helpers\Helper;
@endphp
@extends('frontend.layouts.main')

<style>
  .custom-button{
    background: #7e5bf6;
    border:1px solid #7e5bf6 !important;
    border-radius: 4px !important;
    border: none;
    color: #ffff !important;
    font-weight: 700;
    font-size: 16px;
    font-family: "DM Sans" !important;
    display: flex; 
    justify-content: center; 
    align-items: center; 
    padding: 1rem 4rem 1rem 4rem;
}
.custom-button-1{
    background: #fff;
    border:1px solid #74767e !important;
    border-radius: 4px !important;
    color: #3d474d !important;
    font-weight: 700;
    font-size: 16px;
    font-family: "DM Sans" !important;
    display: flex; 
    justify-content: center; 
    align-items: center; 
    padding: 1rem 2.6rem 1rem 2.6rem;
}
.custom-button-2{
    background: transparent;
    border:1px solid #74767e !important;
    border-radius: 4px !important;
    color: #3d474d !important;
    font-weight: 700;
    font-size: 16px;
    font-family: "DM Sans" !important;
    display: flex; 
    justify-content: center; 
    align-items: center; 
    padding: 1rem 2.6rem 1rem 2.6rem;
}
</style>

@section('content')
<div>
  <!-- NavBar Code -->
  <div>
  @include('frontend.studentdashboard.layouts.navbar')
  @if(auth()->user() && auth()->user()->type == 'Admin')
    @php
      $dashboard_route = route('admindashboard.admin-index');
      $courses_route = route('courses.index');
    @endphp
  @else
    @php
      $courses_route = route('studentdashboard.student-dashboard');
      $dashboard_route = route('studentdashboard.student-dashboard');
    @endphp
  @endif

<!-- Section 1 -->
<div>
  <div class="container section-1">
    <div class="text-container">
      <div class="back-images d-flex justify-content-between ps-5">
        <img class="start" src="{{ asset('assets/images/StarFour.png') }}" alt="" />
        <img class="mid" src="{{ asset('assets/images/Ellipse 4.png') }}" alt="" />
        <img class="last" src="{{ asset('assets/images/Sparkle.png') }}" alt="" />
      </div>
      <div class="text-line-1">
        <span data-translate="heading-1">{{ __('lang.section1.heading1') }}</span>
      </div>
      <div class="text-line-2">
        <span data-translate="heading-2">{{ __('lang.section1.heading2') }} </span>
      </div>
      <div class="text-line-3">
        <span>
          {{ __('lang.section1.text') }}
        </span>
      </div>
      <div class="button-section">
        @if(!auth()->user())
          <div class="button-1">
              <!-- <button class="signu-up">
                <a href="{{route("signup-page")}}" data-translate="sign-up">{{ __('lang.navbar.signup') }}</a>
              </button> -->

              <div class="signu-up">
                <a class="text-decoration-none custom-button " href="{{route("signup-page")}}" data-translate="sign-up">{{ __('lang.navbar.signup') }}</a>
              </div>
          </div>
        @endif
        <div class="button-2">
          <!-- <button class="signu-up">
              <a href="{{$courses_route}}" data-translate="view-courses">
                {{ __('lang.section1.view_courses') }}
              </a>
          </button> -->

          <div class="signu-up">
              <a class="text-decoration-none custom-button-1 " href="{{$courses_route}}" data-translate="view-courses">
                {{ __('lang.section1.view_courses') }}
              </a>
          </div>
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
          <img src="{{ asset('assets/images/Group 124.png') }}" />
        </div>
        <div class="section-right">
          <div class="text-line-1">
            <span class="span-1" data-translate="why">{{ __('lang.section2.why') }}</span>
            <span class="span-2" data-translate="subscribe?">
              {{ __('lang.section2.subscribe') }}
            </span>
          </div>
          <div class="text-line-2">
            <span>{{ __('lang.section2.text') }}
            </span>
          </div>
          <div class="button-line">
            <div class="button-1">
              @if(Auth::check() && !Helper::isPaymentActive())
                <!-- <button data-translate="subscribe-now">
                  {{ __('lang.section2.subscribe_now') }}
                </button> -->

                <div class="sign-up" data-translate="subscribe-now">
                    <a class="text-decoration-none custom-button-2" href="#" style="color:#fff !important; background: #7e5bf6; border:1px solid #7e5bf6 !important; curser:pointer;  data-translate="subscribe-now">
                        {{ __('lang.section2.subscribe_now') }}
                    </a>
                </div>
                
              @else
                {{-- <button data-translate="subscribe-now">
                  {{ __('lang.section2.subscribe_now') }}
                </button> --}}
              @endif
            </div>
            <!-- <div class="button-2">
              <button data-translate="explore-courses">
                <a href="{{$courses_route}}" data-translate="view-courses">
                  {{ __('lang.section2.explore_courses') }}
                </a>
              </button>
            </div> -->
              <div class="signu-up" data-translate="explore-courses">
                <a  class="text-decoration-none custom-button-2" href="{{$courses_route}}" data-translate="view-courses">
                  {{ __('lang.section2.explore_courses') }}
                </a>
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
            <span data-translate="online-lectures">{{ __('lang.section3.online_lectures') }}</span>
          </div>
          <div class="text-line-2">
            <span>{{ __('lang.section3.online_lectures_text') }}
            </span>
          </div>
        </div>
        <div class="section-right">
          <img src="{{ asset('assets/images/Group 310.png') }}" />
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
          <img src="{{asset('assets/images/planning-schedule-time-management-with-stopwatch-man-with-tablet_108855-1986 1.png')}}" />
        </div>
        <div class="section-right">
          <div class="text-line-1">
            <span data-translate="any-time-any-where">
              {{ __('lang.section3.any_time_any_where') }}
            </span>
          </div>
          <div class="text-line-2">
            <span>
              {{ __('lang.section3.any_time_any_where_text') }}
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
            <span data-translate="solved-papers">{{ __('lang.section3.solve_papers') }}</span>
          </div>
          <div class="text-line-2">
            <span>{{ __('lang.section3.solve_papers_text') }}
            </span>
          </div>
        </div>
        <div class="section-right">
          <img src="{{asset('assets/images/3d-illustration-pen-putting-blue-ticks-paper 1.png')}}" />
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
          <img src="{{asset('assets/images/data_management_7 1.png')}}" />
        </div>
        <div class="section-right">
          <div class="text-line-1">
            <span data-translate="collection-of-courses">
              {{ __('lang.section3.collection_of_courses') }}
            </span>
          </div>
          <div class="text-line-2">
            <span>
              {{ __('lang.section3.collection_of_courses_text') }}
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
        <span class="span-1" data-translate="student">{{ __('lang.student_feedback.student') }}</span>
        <span class="span-2" data-translate="feedback">{{ __('lang.student_feedback.feedback') }}</span>
      </div>
      <div class="text-line-2">
        <span>
          {{ __('lang.student_feedback.student_feedback_text') }}
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
                  <img src="{{asset("assets/profile-images/profile1.jpg")}}" alt="" class="card-img" />
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
                <img src="{{asset('assets/images/Vector2.png')}}" alt="" />
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
                  <img src="{{asset('assets/profile-images/profile2.jpg')}}" alt="" class="card-img" />
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
                <img src="{{asset('assets/images/Vector2.png')}}" alt="" />
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
                  <img src="{{asset('assets/profile-images/profile3.jpg')}}" alt="" class="card-img" />
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
                <img src="{{asset('assets/images/Vector2.png')}}" alt="" />
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
                  <img src="{{asset('assets/profile-images/profile4.jpg')}}" alt="" class="card-img" />
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
                <img src="{{asset('assets/images/Vector2.png')}}" alt="" />
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
                  <img src="{{asset('assets/profile-images/profile5.jpg')}}" alt="" class="card-img" />
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
                <img src="{{asset('assets/images/Vector2.png')}}" alt="" />
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
                  <img src="{{asset('assets/profile-images/profile6.jpg')}}" alt="" class="card-img" />
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
                <img src="{{asset('assets/images/Vector2.png')}}" alt="" />
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
                  <img src="{{asset('assets/images/Vector2.png')}}" alt="" class="card-img" />
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
                <img src="{{asset('assets/images/Vector2.png')}}" alt="" />
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
                  <img src="{{asset('assets/profile-images/profile8.jpg"')}}" alt="" class="card-img" />
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
                <img src="{{asset('assets/images/Vector2.png')}}" alt="" />
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
                  <img src="{{asset('assets/profile-images/profile9.jpg')}}" alt="" class="card-img" />
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
                <img src="{{asset('assets/images/Vector2.png')}}" alt="" />
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
@if(!auth()->user())
<div>
  <div class="section-8">
    <div class="container">
      <div class="section-8-main">
        <div class="text-line-1 d-flex justify-content-center">
          <span data-translate="join-us-today!">{{ __('lang.join_us.join_us_today') }}</span>
        </div>
        <div class="text-line-2">
          <span>{{ __('lang.join_us.join_us_today_text') }}
          </span>
        </div>
        <div>
          <a href="{{ route('signup-page') }}">
            <button data-translate="sign-up">{{ __('lang.navbar.signup') }}</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
<!-- footer code -->
<div>
  <footer>
    <div class="footer-line-1">
      <!-- <div>
        <a>
          <span class="border-class" data-translate="careers">
            {{ __('lang.footer.careers') }}
          </span>
        </a>
      </div> -->
      <div style="margin-left:3.5rem;">
        <a href="./privacy-policy" style="text-decoration:none">
          <span class="border-class" data-translate="privacy-policy">
            {{ __('lang.footer.privacy_policy') }}
          </span>
        </a>
      </div>
      <div>
        <a href="./terms-conditions" style="text-decoration:none">
          <span class="" data-translate="terms-conditions">
            {{ __('lang.footer.terms_conditions') }}
          </span>
        </a>
      </div>
    </div>
    <div class="footer-line-2">
      <div>
        <span>© <span id="year_span">{{ date('Y') }}</span> {{ __('lang.footer.angez_inc') }} </span>
      </div>
    </div>
  </footer>
</div>
</div>









     <script>
       function updateTextLanguage() {
            const path = window.location.pathname;
            const langSelectElement = document.getElementById('lang-select');

            const splits = path.split('/')
// console.log(splits);
            if (splits[1] === 'en') {
                langSelectElement.textContent = 'English ';
                console.log(path)
            } else if (splits[1] === 'ar') {
              langSelectElement.textContent = 'Arabic ';
            }
        }
        window.addEventListener('load', updateTextLanguage);
    </script>


@endsection