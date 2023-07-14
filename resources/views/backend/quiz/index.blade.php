@extends('backend.layouts.main')

@section('content')

{{-- <div id="quiz" style="display: none;"> --}}
    <div class="user mt-5 pb-2" id="course-lesson-list" >
        <div class="container">
          <div class="row ">
            <div class="col mt-4 d-flex justify-content-start">
              <p class="heading-text  d-flex justify-content-center"> Create Quiz</p>
            </div>
          </div>
          <div class=" setQuiz">
            <form action="{{ route('quiz.store') }}" method="POST">
                @csrf
              <div class="row">
                <div class="col">
                  <div class="quiz-modal-input">
                    <input type="hidden" name="lesson_id" value="{{ $data['id'] }}">
                    <input type="hidden" name="quiz_id" id="quiz_id">
                    <label for="question" class="form-label" style="font-weight: bold;">Question</label>
                    <input type="text" class="form-control" id="question" name="question"
                      placeholder="Question" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 1</label>
                    <input type="text" class="form-control" name="option1" id="option1" placeholder="Option 1" />
                  </div>
                </div>
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 2</label>
                    <input type="text" class="form-control" name="option2" id="option2" placeholder="Option 2" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 3</label>
                    <input type="text" class="form-control" name="option3" id="option3" placeholder="Option 3" />
                  </div>
                </div>
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 4</label>
                    <input type="text" class="form-control" name="option4" id="option4" placeholder="Option 4" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Correct Answer</label>
                    <input type="text" class="form-control" name="correct_answer" id="correct-option" placeholder="Correct Answer" />
                    <div id="correct-option-error" class="error-message"></div>
                  </div>
                </div>
              </div>

            <!-- <hr> -->
              <!-- <div class="row">
                <div class="col">
                  <div class="quiz-modal-btn mt-1">
                    <button id="add-more-questions-btn"> Add More Questions </button>
                  </div>
                </div>
              </div> -->
              <div class="row">
                <div class="col">
                  <div class="modal-footer modal-quiz-footer py-5">
                    <button type="button" class="can" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="add" id="publish-btn">Publish</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>


      <div class="user mt-5 pb-5" id="course-lesson-list" >
        <div class="container">
          <div class="row ">
            <div class="col mt-4 d-flex justify-content-start">
              <p class="heading-text  d-flex justify-content-center">Questions</p>
            </div>
          </div>
          <div class="row ">
            <div class="col">
              <table class="table">
                <thead>
                    <tr>
                        <th class="question-id-column">Question ID</th>
                        <th class="description-column">Question</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($data['quizes'])>0)
                        @forelse ($data['quizes'] as $key=>$quiz)
                            <tr>
                                <td class="question-id-column">{{ $key+1 }}</td>
                                <td class="description-column">{{ $quiz->question }}</td>
                                <td  >
                                <div class="dropdown dropdown-quiz">
                                    <img class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" src="{{ url('assets/images/dots.png') }}" alt="" style="cursor: pointer;">
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <p class="dropdown-item edit-btn" data-id="{{ $quiz->id }}">Edit</p>
                                    <a class="dropdown-item" href="{{ route('quiz.delete',['id'=>$quiz->id]) }}">Delete</a>

                                    </div>
                                </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No Quiz Found</td>
                                <td></td>
                            </tr>
                        @endforelse
                    @else
                    <td class="description-column">No Question Found</td>
                    <td></td>
                    @endif
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
</div>

<script>
     $(document).on('click', '.edit-btn', function () {
        let id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: '{{ url('quiz') }}/'+id,
            success: function (response) {
                if(response.status)
                {
                    $('#quiz_id').val(response.data.id);
                    $('#question').val(response.data.question);
                    $('#option1').val(response.data.options.option1);
                    $('#option2').val(response.data.options.option2);
                    $('#option3').val(response.data.options.option3);
                    $('#option4').val(response.data.options.option4);
                    $('#correct-option').val(response.data.correct_answer);
                }
            }
        });
    });
</script>

@endsection

