@extends('layouts.sidebar')

@section('main')

<section class="content">
  {{-- @dd($category) --}}
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
          @endif
          @if (Session::get('error'))
              <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.<br><br>
                  <ul>
                      <p>{{ Session::get('error') }}</p>
                  </ul>
              </div>
          @endif
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Add Note</h3>
            </div>
            <form id="quickForm" action="{{route('levels.store')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">User Type</label>
                  <select id="type" name="type" class="form-control" require>
                    <option value="" selected="selected" hidden="hidden">Select Type</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                    {{-- <option {{ ($profiledata->nationality) == 'India' ? 'selected' : '' }}  value="India">India</option> --}}
                  </select>
                </div>

                <div id="teacher" class="mx-0">
                  <div class="form-group">
                  <input type="text" name="guard" value="teacher" hidden>
                    <label>Multi-select
                      <input mbsc-input id="my-input" data-dropdown="true" data-tags="true" />
                    </label>
                    <select name="user_id" id="multiple-select" class="form-control" multiple>
                        <option value="1">Books</option>
                        <option value="2">Books</option>
                        <option value="3">Books</option>
                        <option value="4">Books</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1" class="form-label">Type Note</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <button class="btn btn-secondary" type="submit"> Send </button>\
                  <script>
                      mobiscroll.select('#multiple-select', {
                          inputElement: document.getElementById('my-input'),
                          touchUi: false
                      });
                  </script>
                </div>

                <div id="student" class="mx-0">
                  <div class="form-group">
                  <input type="text" name="guard" value="teacher" hidden>
                    <label>Multi-select
                      <input mbsc-input id="my-input" data-dropdown="true" data-tags="true" />
                    </label>
                    <select name="user_id" id="multiple-select" class="form-control" multiple>
                        <option value="1">Books</option>
                        <option value="2">Books</option>
                        <option value="3">Books</option>
                        <option value="4">Books</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1" class="form-label">Type Note</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <button class="btn btn-secondary" type="submit"> Send </button>\
                  <script>
                      mobiscroll.select('#multiple-select', {
                          inputElement: document.getElementById('my-input'),
                          touchUi: false
                      });
                  </script>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script>
      $('#teacher').hide();
      $('#student').hide();

      $('#type').change(() => {
          var selected = $( "#type option:selected" ).val();
          if(selected == 'teacher')
          {
              $('#teacher').show();
              $('#student').hide();
          }
          else if (selected == 'student')
          {
              $('#teacher').hide();
              $('#student').show();
          }
      });
    </script>



  </section>

@endsection