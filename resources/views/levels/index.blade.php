@extends('layouts.sidebar')

@section('main')
{{-- @dd($level) --}}
                <!-- /.row -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                              <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title">All Level</h3>
                  
                                  <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <a href="{{route('levels.create')}}" class="btn btn-sm rounded btn-secondary">Add New</a>
                  
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
                                        <th>no</th>
                                        <th>Category</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($level as $d)
                                        <tr>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->category->name}}</td>
                                            <td>{{$d->level}}</td>
                                            <td>
                                              <form action="{{route('levels.destroy',$d->id)}}" method="POST">
                                                {{-- <a href="" style="color:white;" >Delete</a> --}}
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('levels.edit',$d->id)}}" class="btn btn-sm rounded btn-secondary">Edit</a>
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