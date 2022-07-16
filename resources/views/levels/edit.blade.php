@extends('layouts.sidebar')

@section('main')

<section class="content">
  {{-- @dd($categories); --}}
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Edit Levels</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="{{ route('levels.update', $levels->id) }}" method="POST">
              @csrf
              @method('PATCH')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category</label>
                  <select name="category_id" class="form-control" >
                    @foreach($categories as $id => $d)
                    <option  value="{{$id}}">{{$d}}</option>
                    {{-- <option {{ ($profiledata->nationality) == 'India' ? 'selected' : '' }}  value="India">India</option> --}}
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Levels</label>
                  {{-- <input type="text" value="{{$d->id}}" hidden> --}}
                  <input type="text" name="name" value="{{$levels->level}}" class="form-control" id="exampleInputEmail1" placeholder="Level Name">
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