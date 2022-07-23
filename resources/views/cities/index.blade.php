@extends('layouts.sidebar')

@section('main')
{{-- @dd($city) --}}
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
                                <div class="card-header bg-secondary">
                                  <h3 class="card-title  pt-2">Add City</h3>
                  
                                  <div class="card-tools">
                                    <div class="input-group input-group-sm pt-2" style="width: 150px;">
                                        <a href="{{route('cities.create')}}" class="btn btn-sm rounded btn-light text-secondary "><strong>Add New</strong></a>
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
                                  <table class="table table-hover text-nowrap">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>City</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($city as $d)
                                        <tr>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->name}}</td>
                                            <td>
                                              <form action="{{route('cities.destroy',$d->id)}}" method="POST">
                                                {{-- <a href="" style="color:white;" >Delete</a> --}}
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('cities.edit',$d->id)}}" class="btn btn-sm rounded btn-secondary">Edit</a>
                                                <button class="btn btn-sm rounded btn-danger">Delete</button>
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