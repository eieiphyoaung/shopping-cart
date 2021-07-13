@extends('admin.layouts.master')

@section('content')
<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Customers</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th style="width: 40px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @php $count = 1; @endphp
                      @foreach($customers as $customer)
                        <tr>
                            <td> {{$count ++}} </td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>
                                <div class="btn-group">
                                    <div class="container">
                                        <a href="/admin/customers/{{$customer->id}}" type="button" class="btn btn-warning">View</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
                </table> <br>


              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection