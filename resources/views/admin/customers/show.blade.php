@extends('admin.layouts.master')

@section('content')
<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Customer Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <tbody>
                        <tr>
                            <td>Name</td>
                            <td>{{ $customer->name}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $customer->email}}</td>
                        </tr>
                        <tr>
                            <td>Registered Date</td>
                            <td>{{date('Y F d', strtotime($customer->created_at))}}</td>
                        </tr>
                        <tr>
                            <td>Profile</td>
                            <td><img src="{{ $customer->profile }}" alt="Profile Image" width=200 height=200></td>
                        </tr>
                  </tbody>
                </table> <br>
                <div class="form-group">
                    <a href="/admin/customers" class="btn btn-warning">Back</a>
                </div>

              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection