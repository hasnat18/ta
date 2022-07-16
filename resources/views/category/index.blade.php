@extends('layouts.sidebar')

@section('main')
                <!-- /.row -->
                <section class="content position-relative">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                              <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title">All Category</h3>
                  
                                  <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <a href="{{route('category.create')}}" class="btn btn-sm rounded btn-secondary">Add New</a>
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
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($category as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>
                                              <form action="{{ route('category.destroy', $data->id) }}" method="POST">
                                                {{-- <a href="{{route('category.destroy',$data->id)}} " style="color:white;" >Delete</a> --}}
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('category.edit',$data->id)}}" class="btn btn-sm rounded btn-secondary">Edit</a>
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