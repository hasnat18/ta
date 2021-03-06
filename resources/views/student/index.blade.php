{{-- @dd($stu) --}}

@extends('layouts.sidebar')

@section('main')
{{-- @dd($level) --}}
                <!-- /.row -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
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
                              <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title">All Student</h3>
                  
                                  <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        {{-- <a href="{{route('levels.create')}}" class="btn btn-sm rounded btn-secondary">Add New</a> --}}
                  
                                      {{-- <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                          <i class="fas fa-search"></i>
                                        </button>
                                      </div> --}}
                                    </div>
                                  </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                  <table class="table table-hover  table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Registered Time</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($stu as $d)
                                        <tr>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->name}}</td>
                                            <td>{{$d->email}}</td>
                                            <td>{{$d->created_at}}</td>
                                            <td>
                                              <form action="" method="POST">
                                                {{-- <a href="" style="color:white;" >Delete</a> --}}
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('students.show',$d->id)}}" class="btn btn-sm rounded btn-secondary">Edit</a>
                                            </form>
                                            </td>
                                          </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
                                </div>
                                <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                            </div>
                          </div>
                          <!-- /.row -->
                    </div>
                </section>

@endsection