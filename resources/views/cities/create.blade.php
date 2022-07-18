@extends('layouts.sidebar')

@section('main')

<section class="content">
  {{-- @dd($category) --}}
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Add City</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            {{-- @dd($category); --}}
            <form id="quickForm" action="{{route('cities.store')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">City</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="City Name">
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