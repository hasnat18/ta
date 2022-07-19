@extends('layouts.sidebar')

@section('main')

<section class="content">
  {{-- @dd($lvls) --}}
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
          <!-- jquery validation -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Add Subject</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            {{-- @dd($category); --}}
            <form id="quickForm" action="{{route('subjects.store')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Level</label>
                  <select name="level_id" class="form-control" >
                    @foreach($lvls as $id => $lvl)
                    @dd($lvl)
                    <option  value="{{$lvl->$id}}">{{$lvl->level}}</option>
                    {{-- <option {{ ($profiledata->nationality) == 'India' ? 'selected' : '' }}  value="India">India</option> --}}
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Subject</label>
                  <input type="text" name="subject" class="form-control" id="exampleInputEmail1" placeholder="Level Name">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-warning text-white"><b>Add</b></button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

@endsection