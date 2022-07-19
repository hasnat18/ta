@extends('layouts.sidebar')

@section('main')

<section class="content">
  {{-- @dd($loc) --}}
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
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
              <h3 class="card-title">Add Location</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            {{-- @dd($category); --}}
            <form id="quickForm" action="{{route('locations.update',$loc->id)}}" method="POST">
              @csrf
              @method('PATCH')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">City</label>
                  <select class="form-control" name="city_id">
                    @foreach($city as $id => $d)
                    <option value="" selected="selected" hidden="hidden">choose here</option>
                    <option value="{{$d->id}}">{{$d->name}}</option>
                      {{-- <option {{ ($profiledata->nationality) == 'India' ? 'selected' : '' }}  value="India">India</option> --}}
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter Location </label>
                  <input type="text" value="{{$loc->location}}" name="location" class="form-control" id="exampleInputEmail1" placeholder="Enter Location">
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

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

@endsection