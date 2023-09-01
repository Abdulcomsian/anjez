@extends('backend.layouts.main')
<style>
        .table thead th {
    vertical-align: bottom;
    border-bottom: 1px solid lightgray !important;
}
</style>
@section('content')

{{-- <div id="quiz" style="display: none;"> --}}
    <div class="user mt-5 pb-2" id="course-lesson-list" >
        <div class="container">
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          <div class="row ">
            <div class="col mt-4 d-flex justify-content-start">
              <p class="heading-text  d-flex justify-content-center"> Create Quiz</p>
            </div>
          </div>
          <div class=" setQuiz">
            <form action="{{ route('quiz.store') }}" method="POST" class="quiz_form">
                @csrf
              <div class="row">
                <div class="col-6">
                  <div class="quiz-modal-input">
                    <input type="hidden" name="lesson_id" value="{{ $data['id'] }}">
                    <input type="hidden" name="quiz_id" id="quiz_id">
                    <label for="question" class="form-label" style="font-weight: bold;">Question (En) </label>
                    <input type="text" class="form-control" id="question" name="question" value="{{old('question')}}"
                      placeholder="Question En" />
                  </div>
                </div>
                <div class="col-6">
                    <label for="question" class="form-label" style="font-weight: bold;">Question (Ar) </label>
                    <input type="text" class="form-control" id="question_ar" name="question_ar" value="{{old('question_ar')}}"
                      placeholder="Question Ar" />
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 1 (En)</label>
                    <input type="text" class="form-control" onkeyup="checkCorrectAnswerEn()" name="option1" value="{{old('option1')}}" id="option1" placeholder="Option 1 En" />
                  </div>
                </div>
                <div class="col">
                    <div class="quiz-modal-input mt-3">
                        <label for="question" class="form-label">Option 1 (Ar)</label>
                        <input type="text" class="form-control" onkeyup="checkCorrectAnswerAr()" name="option1_ar" value="{{old('option1_ar')}}" id="option1_ar" placeholder="Option 1 Ar" />
                      </div>
                  {{-- <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 2</label>
                    <input type="text" class="form-control" onkeyup="checkCorrectAnswer()" name="option2" id="option2" placeholder="Option 2" />
                  </div> --}}
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 2 (En)</label>
                    <input type="text" class="form-control" onkeyup="checkCorrectAnswerEn()" name="option2" value="{{old('option2')}}" id="option2" placeholder="Option 2 En" />
                  </div>
                </div>
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 2 (Ar)</label>
                    <input type="text" class="form-control" onkeyup="checkCorrectAnswerAr()" name="option2_ar" value="{{old('option2_ar')}}" id="option2_ar" placeholder="Option 2 Ar" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 3 (En)</label>
                    <input type="text" class="form-control" onkeyup="checkCorrectAnswerEn()" name="option3" value="{{old('option3')}}"  id="option3" placeholder="Option 3 En" />
                  </div>
                </div>
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 3 (Ar)</label>
                    <input type="text" class="form-control" onkeyup="checkCorrectAnswerAr()" name="option3_ar" value="{{old('option3_ar')}}" id="option3_ar" placeholder="Option 3 Ar" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 4 (En)</label>
                    <input type="text" class="form-control" onkeyup="checkCorrectAnswerEn()" name="option4" value="{{old('option4')}}" id="option4" placeholder="Option 4 En" />
                  </div>
                </div>
                <div class="col">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Option 4 (Ar)</label>
                    <input type="text" class="form-control" onkeyup="checkCorrectAnswerAr()" name="option4_ar" value="{{old('option4_ar')}}" id="option4_ar" placeholder="Option 4 Ar" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Correct Answer (En)</label>
                    <input type="text" class="form-control"  onkeyup="checkCorrectAnswerEn()" name="correct_answer" value="{{old('correct_answer')}}" id="correct-option" placeholder="Correct Answer" />
                    <div id="correct-option-error" class="error-message d-none" > Answer doesn’t match any of the provided options</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="quiz-modal-input mt-3">
                    <label for="question" class="form-label">Correct Answer (Ar)</label>
                    <input type="text" class="form-control"  onkeyup="checkCorrectAnswerAr()" name="correct_answer_ar" value="{{old('correct_answer_ar')}}" id="correct-option-ar" placeholder="Correct Answer Ar" />
                    <div id="correct-option-error" class="text-danger error-message-ar d-none" > الإجابة لا تتطابق مع أي من الخيارات المتوفرة</div>
                  </div>
                </div>
                {{--  --}}
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="quiz-modal-input mt-3">
                        <label for=""  class="form-label">Correct Answer Reason (En)</label>
                        <textarea id="editor" class="editor correct_answer_description" name="correct_answer_description">{{old('correct_answer_description')}}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="quiz-modal-input mt-3">
                        <label for=""  class="form-label">Correct Answer Reason (Ar)</label>
                        <textarea id="editor_ar" class="editor correct_answer_description_ar" name="correct_answer_description_ar">{{old('correct_answer_description_ar')}}</textarea>
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
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="courses">
                        <th class="question-id-column py-4"> <span>  Question ID </span></th>
                        <th class="description-column py-4"> <span>  Question </span></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($data['quizes'])>0)
                        @forelse ($data['quizes'] as $key=>$quiz)
                            <tr class="course">
                                <td class="question-id-column py-4"> <span> {{ $key+1 }} </span></td>
                                <td class="description-column py-4"> <span>{{ $quiz->question }} </span></td>
                                <td  class="py-4">
                                <div class="dropdown dropdown-quiz">
                                    <img class="dropdown-toggle-1" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
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
</div>

<script>
    $(document).ready(function() {

   var createEditor = ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );
    var createEditorArabic =  ClassicEditor
    .create( document.querySelector( '#editor_ar' ) )
    .catch( error => {
        console.error( error );
    } );
    $(document).on('click', '.edit-btn', function () {
        let id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: '{{ url('quiz') }}/'+id,
            success: function (response) {
                if(response.status)
                {
                    console.log("correct_answer_description  ", response.data.options.correct_answer_description);
                    $('#quiz_id').val(response.data.id);
                    $('#question').val(response.data.question);
                    $('#option1').val(response.data.options.option1);
                    $('#option2').val(response.data.options.option2);
                    $('#option3').val(response.data.options.option3);
                    $('#option4').val(response.data.options.option4);
                    $('#correct-option').val(response.data.options.correct_answer);
                    $('#question_ar').val(response.data.question_ar);
                    $('#option1_ar').val(response.data.options.option1_ar);
                    $('#option2_ar').val(response.data.options.option2_ar);
                    $('#option3_ar').val(response.data.options.option3_ar);
                    $('#option4_ar').val(response.data.options.option4_ar);
                    $('#correct-option-ar').val(response.data.options.correct_answer_ar);
                    // Set the CKEditor content
                    createEditor.then( editor => {
                    // Set the CKEditor content
                      editor.setData(response.data.options.correct_answer_description);
                    })
                    .catch( error => {
                        console.error( error );
                    });

                    createEditorArabic.then( editor => {
                    // Set the CKEditor content
                      editor.setData(response.data.options.correct_answer_description_ar);
                    })
                    .catch( error => {
                        console.error( error );
                    });

                    //  createEditor.setData(response.data.options.correct_answer_description)

                    //  createEditor.instances.editor.setData(response.data.options.correct_answer_description);
                    // $('.correct_answer_description').html(response.data.options.correct_answer_description);
                    // CKEDITOR.instances['editor'].setData(response.data.options.correct_answer_description);
                    // var editor = ClassicEditor.instances.editor.setData('ddddd');
                    // editor.setData("ddddd");
                    // CKEDITOR.instances.editor.setData( 'sss' );
                    // CKEDITOR.instances['editor'].setData(response.data.options.correct_answer_description);
                }
            }
        });
    });
  });

    let cancel = document.getElementsByClassName('can')[0];
    cancel.addEventListener('click', function(){
        $('.quiz_form')[0].reset();
        $('#quiz_id').removeAttr('value');
    });

    function checkCorrectAnswerEn()
    {
        let options = [], opt1, opt2, opt3, opt4, corr_opt, error_msg, publish_btn;

        opt1 = document.getElementById('option1').value;
        opt2 = document.getElementById('option2').value;
        opt3 = document.getElementById('option3').value;
        opt4 = document.getElementById('option4').value;
        corr_opt = document.getElementById('correct-option').value;

        error_msg = document.getElementsByClassName('error-message')[0];
        publish_btn = document.getElementById('publish-btn');

        options.push(opt1, opt2, opt3, opt4);
        is_exists = options.includes(corr_opt);

        if(!is_exists)
        {
            error_msg.classList.remove('d-none');
            error_msg.classList.add('d-block');
            publish_btn.setAttribute('disabled', true);
        }
        else
        {
            error_msg.classList.add('d-none');
            error_msg.classList.remove('d-block');
            publish_btn.removeAttribute('disabled');

        }
    }

    function checkCorrectAnswerAr()
    {
        let options = [], opt1_ar, opt2_ar, opt3_ar, opt4_ar, corr_opt_ar, error_msg_ar, publish_btn;

        opt1_ar = document.getElementById('option1_ar').value;
        opt2_ar = document.getElementById('option2_ar').value;
        opt3_ar = document.getElementById('option3_ar').value;
        opt4_ar = document.getElementById('option4_ar').value;
        corr_opt_ar = document.getElementById('correct-option-ar').value;

        error_msg_ar = document.getElementsByClassName('error-message-ar')[0];
        publish_btn = document.getElementById('publish-btn');

        options.push(opt1_ar, opt2_ar, opt3_ar, opt4_ar);
        is_exists = options.includes(corr_opt_ar);

        if(!is_exists)
        {
            error_msg_ar.classList.remove('d-none');
            error_msg_ar.classList.add('d-block');
            publish_btn.setAttribute('disabled', true);
        }
        else
        {
            error_msg_ar.classList.add('d-none');
            error_msg_ar.classList.remove('d-block');
            publish_btn.removeAttribute('disabled');

        }
    }


</script>

@endsection
