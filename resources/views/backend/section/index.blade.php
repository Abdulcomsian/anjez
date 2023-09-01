@extends('backend.layouts.main')
<style>
    .table thead th {
    vertical-align: bottom;
    border-bottom: 1px solid lightgray !important;
}

@media screen and (max-width:888) {
  .heading-text{
font-size:24px !important;
  }
}
</style>
@section('content')

<div class="user mt-5 pb-5" id="course-section">
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
          <p class="heading-text  d-flex justify-content-center">Course Section</p>
        </div>
        <div class="col d-flex justify-content-end"> <button class="px-2 mt-3 plus" data-toggle="modal"
            data-target="#exampleModalCenter"> + Add New
            Section</button>
        </div>
      </div>
      <form method="get">
          <div class="row aa d-flex justify-content-between"
            style="background-color:  #c4bfff21;  border-radius:0.2rem ;">
            <div class="col-md-5 py-2">
              <input type="text" name="search" class="iconss py-2" value placeholder="Search by course name">
            </div>
            <div class="col-md-6 py-2 d-flex justify-content-end">
              <button class="d-flex justify-content-between px-3 pt-2" type="submit"> <img class="pt-1"
                  src="{{ url('assets/images/button icon.png') }}" alt="" style="margin-right: 1%;"> Filter </button>
            </div>
          </div>
      </form>
      <!-- <hr>
      <div class="row courses d-flex justify-content-between">
        <div class="col-2"> <span> ID </span> </div>
        <div class="col-2"> <span> TITLE </span> </div>
        <div class="col-2"> <span> LESSONS </span> </div>
        <div class="col-2"> <span>STATUS</span></div>
        <div class="col-2"><span>Action</span></div>
      </div>
      @forelse ($data['sections'] as $key=>$section)
            <hr class="mt-4">
            <div class="row course d-flex justify-content-between mt-2">
                <div class="col-2"> <span> {{ $key+1 }} </span> </div>
                <div class="col-2"> <span> {{ $section->title ?? '--' }} </span> </div>
                <div class="col-2"> <span style="color: #2572CC;"> <a href="{{ route('lessons.index',['id'=>$section->id]) }}" style="text-decoration: none">Lesson: {{ $section->lessons_count }}</a>  </span> </div>
                <div class="col-2"> @if($section->status == 'Active') <span style="color: #1CB104;">{{ $section->status }}</span> @else <span style="color: #e93e28;"> {{ $section->status }}</span> @endif</div>
               
                <div class="col-2 dots">
                <div class="dropdown dropdown-quiz">
                    <img class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" src="{{ url('assets/images/dots.png') }}" alt="">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <p class="dropdown-item edit-btn"  data-id="{{ $section->id }}">Edit</p>
                        <a href="{{ route('section.delete',['id'=>$section->id]) }}" class="dropdown-item">Delete</a>
                    </div>
                </div>
                </div>
            </div>
        @empty
            <div class="col-10"> <span> No Section Found </span> </div>
        @endforelse
    </div> -->


<div class="table-responsive">
  <table class="table ">
    <thead>
      <tr class="courses">
        <th scope="col"  class="py-4">ID</th>
        <th scope="col"  class="py-4">TITLE</th>
        <th scope="col"  class="py-4">LESSONS</th>
        <th scope="col"  class="py-4">STATUS</th>
        <th scope="col"  class="py-4">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($data['sections'] as $key=>$section)
      <tr class="course ">
        <td class="py-4"> <span>{{ $key+1 }} </span> </td>
        <td class="py-4"> <span> {{ $section->title ?? '--' }} </span></td>
        <td class="py-4"> <span>
        <a href="{{ route('lessons.index',['id'=>$section->id]) }}" style="text-decoration: none; color: #2572CC;">
            Lesson: {{ $section->lessons_count }}
          </a>
        </span>
        
        </td>
        <td class="py-4">
          @if($section->status == 'Active')
          <span style="color: #1CB104;">{{ $section->status }}</span>
          @else
          <span style="color: #e93e28;">{{ $section->status }}</span>
          @endif
        </td>
        <td class="py-4">
          <div class="dropdown dropdown-quiz">
            <img class="dropdown-toggle-1" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false" src="{{ url('assets/images/dots.png') }}" alt="">
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <p class="dropdown-item edit-btn" data-id="{{ $section->id }}">Edit</p>
              <a href="{{ route('section.delete',['id'=>$section->id]) }}" class="dropdown-item">Delete</a>
            </div>
          </div>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="5">No Section Found</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>




  </div>

  <!-- corurse section modal  -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-5">
        <div class="modal-header">
          <h5 class="modal-title course-heading-text" id="exampleModalLongTitle">Add Section</h5>
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('section.store') }}">
            @csrf
            <div class="row">
              <div class="col-6 star course">
                <input type="hidden" name="course_id" value="{{ $data['id'] }}">
                <label for="title" class="form-label">Title (En) </label>
                <input type="text" class="form-control" name="title" />
              </div>
              <div class="col-6 star course">
                <input type="hidden" name="course_id" value="{{ $data['id'] }}">
                <label for="title" class="form-label">Title (Ar) </label>
                <input type="text" class="form-control" name="title_ar" />
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-6 star course">
                  {{-- <input type="text" class="form-control" id="firstname" /> --}}
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" aria-label="Default select example">
                    <option value="Active"> Active </option>
                    <option value="Draft"> Draft </option>
                </select>
              </div>
              {{-- <div class="col-6 star course">
                <label for="status_ar"  class="form-label">Status</label>
                <select class="form-select" id="status_ar" name="status_ar" aria-label="Default select example">
                    <option value="نشيط"> نشيط </option>
                    <option value="مسودہ"> مسودہ </option>
                </select>
              </div> --}}
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button class="add mt-3" style="width: 100%;"> Add Section </button>
        </div>
    </form>
      </div>
    </div>
  </div>

  {{-- Update Modal --}}
  <div class="modal fade" id="updateSectionModal" tabindex="-1" role="dialog"
    aria-labelledby="updateSectionModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-5">
        <div class="modal-header">
          <h5 class="modal-title course-heading-text" id="exampleModalLongTitle">Update Section</h5>
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('section.update') }}">
            @csrf
            <div class="row">
              <div class="col star course">
                <input type="hidden" name="course_id" id="course_id">
                <input type="hidden" name="section_id" id="section_id">
                <label for="title" class="form-label">Title (En) </label>
                <input type="text" class="form-control" name="title" id="title"/>
              </div>
              <div class="col star course">
                <label for="title" class="form-label">Title (Ar) </label>
                <input type="text" class="form-control" name="title_ar" id="title_ar"/>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col star course">
                <label for="status" class="form-label">Status (En)</label>
                <select class="form-select" id="status_update_en" name="status" aria-label="Default select example">
                    <option value="Active"> Active </option>
                    <option value="Draft"> Draft </option>
                </select>
              </div>
              {{-- <div class="col star course">
                <label for="status" class="form-label">Status (Ar)</label>
                <select class="form-select" id="status_update_ar" name="status_ar" aria-label="Default select example">
                    <option value="نشيط"> نشيط </option>
                    <option value="مسودة"> مسودة </option>
                </select>
              </div> --}}
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button class="add mt-3" style="width: 100%;"> Update Section </button>
        </div>
    </form>
      </div>
    </div>
  </div>
  <script>

$(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    $(document).on('click', '.edit-btn', function () {
        let id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: '{{ url('course/edit/section') }}/'+id,
            success: function (response) {
                if(response.status)
                {
                    $('#updateSectionModal').modal('show');
                    $('#title').val(response.data.title);
                    $('#title_ar').val(response.data.title_ar);
                    $('#status_update_en').val(response.data.status);
                    // $('#status_update_ar').val(response.data.status_ar)
                    $('#section_id').val(response.data.id);
                    $('#course_id').val(response.data.course_id);
                }
            }
        });
    });

    $(document).on('click', '.delete-btn', function () {
        let id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: '{{ url('course/delete/section') }}/'+id,
            success: function (response) {
                if(response.status)
                {
                    window.location.reload();
                }
            }
        });
    });

  </script>
@endsection

