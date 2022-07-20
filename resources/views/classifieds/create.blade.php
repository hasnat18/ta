




@extends('layouts.sidebar')

@section('main')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 position-relative">
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
              <h3 class="card-title">Add Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="{{route('classifieds.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">

                {{-- <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <div class="row">
                              <label class="col-sm-12">Upload an image</label>
                              <div class="col-sm-12 validate">
                                  <input type="file" id="id_proof" name="image" class="form-control" accept="image/*" onchange="loadImage(event)" required>
                              </div>
                      </div>
                  </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Business Name</label>
                      <input type="text" name="bname" class="form-control" id="exampleInputPassword1" placeholder="Business name" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Contact Number</label>
                      <input type="tel" name="contact" class="form-control" id="exampleInputEmail1" placeholder="Contact Number" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cnic Number</label>
                      <input type="Text" name="cnic" class="form-control" id="exampleInputPassword1" placeholder="Nic Number">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Website Link</label>
                      <input type="text" name="web" class="form-control" id="exampleInputEmail1" placeholder="Website Link">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleSelectRounded0">Category</label>
                      <select class="custom-select rounded-0" name="category" id="exampleSelectRounded0" required>
                        <option value="{{null}}" selected="selected" hidden="hidden" disabled>Select City</option>
                        <option>Premium</option>
                        <option>Standard</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="md-form">
                      <!--The "from" Date Picker -->
                      <label for="startingDate">Start Date</label>
                      <input placeholder="Selected starting date" type="date" name="start_date" id="startingDate" class="form-control datepicker">
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="md-form">
                      <!--The "from" Date Picker -->
                      <label for="startingDate">End Date</label>
                      <input placeholder="Selected starting date" name="end_date" type="date" id="startingDate" class="form-control datepicker">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Discription</label>
                      <textarea class="form-control" name="description" rows="3" placeholder="Type Discription"></textarea>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-warning text-white"><b>Add</b></button>
                </div>
              </div>
              <!-- /.card-body -->
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