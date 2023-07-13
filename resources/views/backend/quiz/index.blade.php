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
            <form action="">
              <div class="row">
                <div class="col">
                  <div class="quiz-modal-input">
                    <label for="question" class="form-label" style="font-weight: bold;">Question</label>
                    <input type="text" class="form-control" id="firstname"
                      placeholder="Lorem ipsum dolor sit amet consectetur Mattis ut non" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 1</label>
                    <input type="text" class="form-control" id="option1" placeholder="Lorem ipsum 1" />
                  </div>
                </div>
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 2</label>
                    <input type="text" class="form-control" id="option2" placeholder="Lorem ipsum 2" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 3</label>
                    <input type="text" class="form-control" id="option3" placeholder="Lorem ipsum 3" />
                  </div>
                </div>
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 4</label>
                    <input type="text" class="form-control" id="option4" placeholder="Lorem ipsum 4" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Correct Answer</label>
                    <input type="text" class="form-control" id="correct-option" placeholder="Lorem ipsum 4" />
                    <div id="correct-option-error" class="error-message"></div>
                  </div>
                </div>
              </div>
            </form>

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
                    <button type="button" class="add" id="publish-btn">Publish</button>
                  </div>
                </div>
              </div>
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
                        <th class="description-column">Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="question-id-column">1</td>
                        <td class="description-column">Sample question description 1</td>
                        <td  >
                          <div class="dropdown dropdown-quiz">
                            <img class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" src="{{ url('assets/images/dots.png') }}" alt="" style="cursor: pointer;">
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>

                            </div>
                          </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
</div>


@endsection

