@extends('frontend.studentdashboard.layouts.main')

@section('content')


    <div>
      <div class="main-content">
        <div class="greeting-text">
          <div class="text-line-1">
            <span id="date"></span>
          </div>
          <div class="text-line-2">
            <span> Hi {{ auth()->user()->first_name }}, <span id="greeting"> </span></span>
          </div>
          <div class="text-line-3">
            <span>To view lessons click on the link below!</span>
          </div>
        </div>

        <div class="subject-list">
          <div class="row">

            @forelse ($data['courses'] as $course)
            {{-- @dump($course); --}}
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="card sample-card">
                        <a href="{{ route('course.details', ['id'=>encryptParams($course->id)]) }}">
                        <div class="card-img-container">
                            @if(isset($course->feature_image))
                                <img src="{{ asset('assets/courses-content/course-images/'.$course->feature_image) }}" class="card-img-top img-fluid" alt="..." />

                            @else
                                <img src="http://via.placeholder.com/640x360" width="180" height="120" />
                                {{-- <img src="./assets/images/8138748 1.png" class="card-img-top img-fluid" alt="..." /> --}}
                            @endif
                            </div>
                            </a>
                        <div class="card-body">
                        <div class="card-text">
                            <div class="text-line-1">
                                <span><a href="{{ route('course.details', ['id'=>encryptParams($course->id)]) }}"> {{ $course->title}} </a> </span>
                            </div>
                            <div class="text-line-2">
                                <span>{!! $course->description !!}</span>
                            </div>
                            <?php
                                if(isset($course->sections) && count($course->sections)>0 && !is_null($course->sections) && !empty($course->sections))
                                {
                                    $mark_as_read_lessons = 0;
                                    $lesson_count = 0;
                                    foreach($course->sections as $section)
                                    {
                                        if(isset($section->lessons) && count($section->lessons)>0 && !is_null($section->lessons) && !empty($section->lessons))
                                        {
                                            // $mark_as_lessons +=$section->lesso
                                            foreach($section->lessons as $lesson)
                                            {
                                                if($lesson->is_complete)
                                                {
                                                    // dd($lesson);
                                                    $mark_as_read_lessons+=1;
                                                }
                                                // dump($mark_as_read_lessons);
                                            //     if(isset($lesson->quiz_scores))
                                            //     {
                                            //         $taken_score = (int)($lesson->quiz_scores ? $lesson->quiz_scores->score_taken : 0);
                                            //         $total_score = (int)($lesson->quiz_scores ? $lesson->quiz_scores->total_score : 0);
                                            //         $percentage = ($taken_score/$total_score)*100;
                                            //         $total+=$percentage;
                                            //         $progress = $total;
                                            //     }
                                            }
                                            $lesson_count += count($section->lessons);
                                            // dump($mark_as_read_lessons, $lesson_count);
                                            try
                                            {
                                                $progress = ($mark_as_read_lessons/$lesson_count)*100;
                                            }
                                            catch (\Throwable $th)
                                            {
                                                //
                                            }
                                        }
                                    }
                                }
                                else
                                {
                                    $progress = 0;
                                }
                            ?>
                            <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress ?? '0' }}" aria-valuemin="0"
                                aria-valuemax="100" style="width: {{ $progress ?? '0' }}%"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <h3 style="color: red; font-weight: bold"> No Course Found ! </h3>
                </div>
            @endforelse

            {{-- <div class="col-lg-3 col-md-6 col-sm-8">
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
            </div> --}}

            {{-- <div class="col-lg-3 col-md-6 col-sm-8">
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
            </div> --}}

            {{-- <div class="col-lg-3 col-md-6 col-sm-8">
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
            </div> --}}
        </div>

        {{-- <div class="row">
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
        </div> --}}
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
