@extends('layouts.sidebar')

@section('main')

<section class="content">
  {{-- @dd($subj) --}}
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
              <h3 class="card-title">Add Subject</h3>
            </div>
            <form id="quickForm" action="{{route('subjects.update',$subj->id)}}" method="POST">
              @csrf
              @method('PATCH')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Level</label>
                  <select name="level_id" class="form-control" required>
                    @foreach($lvls as $id => $lvl)
                      <option value="" selected="selected" hidden="hidden">choose here</option>
                      <option  value="{{$lvl->id}}">{{$lvl->level}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Subject</label>
                  <input type="text" value="{{$subj->subject}}" name="subject" class="form-control" id="exampleInputEmail1" placeholder="Level Name">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-warning text-white"><b>Add</b></button>
              </div>
            </form>
          </div>
          </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>

@endsection