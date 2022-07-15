@extends('layouts.sidebar')

@section('main')
{{-- @dd($category) --}}
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
                                      {{-- @foreach ($category as $data) --}}
                                        <tr>
                                            <td>1</td>
                                            <td>English</td>
                                            <td>Mid</td>
                                            <td>
                                              <form action="" method="POST">
                                                <a href="" style="color:white;" >Delete</a>
                                                @csrf
                                                @method('DELETE')
                                                <a href="" class="btn btn-sm rounded btn-secondary">Edit</a>
                                                <button class="btn btn-sm rounded btn-danger">Delete</button>
                                            </form>
                                            </td>
                                          </tr>
                                        {{-- @endforeach --}}
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