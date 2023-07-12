@extends('backend.layouts.main')

@section('content')
<!-- quiz modal  -->
            <!-- Modal -->
            <div class="modal fade " id="exampleModalCenterthree" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header d-flex justify-content-between align-items-center"
                    style="background-color: #F9FAFB;">
                    <h5 class="modal-title mx-auto" id="exampleModalLongTitle">Create Quiz</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                      style="margin-right: 2px;">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body modal-body-quiz mt-5">
                    <div class="question-heading">
                      <p>Questions</p>
                    </div>
                    <div class="question">
                      <p> Lorem ipsum dolor sit amet consectetur. Mattis ut non adipiscing sit tortor diam tortor.</p>
                    </div>
                    <form action="">
                      <div class="quiz-modal-input">
                        <label for="question" class="form-label">Question</label>
                        <input type="text" class="form-control" id="firstname"
                          placeholder="Lorem ipsum dolor sit amet consectetur Mattis ut non" />
                      </div>
                      <div class="quiz-modal-input mt-3">
                        <label for="question" class="form-label">Option 1</label>
                        <input type="text" class="form-control" id="option1" placeholder="Lorem ipsum 1" />
                      </div>
                      <div class="quiz-modal-input mt-3">
                        <label for="question" class="form-label">Option 2</label>
                        <input type="text" class="form-control" id="option2" placeholder="Lorem ipsum 2" />
                      </div>
                      <div class="quiz-modal-input mt-3">
                        <label for="question" class="form-label">Option 3</label>
                        <input type="text" class="form-control" id="option3" placeholder="Lorem ipsum 3" />
                      </div>
                      <div class="quiz-modal-input mt-3">
                        <label for="question" class="form-label">Option 4</label>
                        <input type="text" class="form-control" id="option4" placeholder="Lorem ipsum 4" />
                      </div>
                      <div class="quiz-modal-input mt-3">
                        <label for="question" class="form-label">Correct Answer</label>
                        <input type="text" class="form-control" id="correct-option" placeholder="Lorem ipsum 4" />
                        <div id="correct-option-error" class="error-message"></div>
                      </div>
                    </form>
                    <hr>
                    <div class="quiz-modal-btn mt-1">
                      <button id="add-more-questions-btn"> Add More Questions </button>
                    </div>

                  </div>
                  <div class="modal-footer modal-quiz-footer py-5">
                    <button type="button" class="can" data-dismiss="modal">Cancel</button>
                    <button type="button" class="add" id="publish-btn">Publish</button>
                  </div>
                </div>
              </div>
            </div>
@endsection

