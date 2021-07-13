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
                      <th>Description</th>
                      <th>Price</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th style="width: 40px">Actions</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
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