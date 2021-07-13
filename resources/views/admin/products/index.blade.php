@extends('admin.layouts.master')

@section('content')
<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Products</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="mb-3">
                  <a href="/admin/products/add" type="button" class="btn btn-success">Create New Product</a>
                </div> 
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th style="width: 40px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @php $count = 1; @endphp
                      @foreach($products as $product)
                        <tr>
                            <td> {{$count ++}} </td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                            <td><img src="{{$product->image}}" alt="Product Image" width=50 height=50>
                            <td>
                                <div class="btn-group">
                                    <div class="container">
                                        <a href="/admin/products/edit/{{$product->id}}" type="button" class="btn btn-warning">Edit</a>
                                    </div>
                                    <div class="container">
                                        <a href="/admin/products/delete/{{$product->id}}"
                                        onclick="return confirm('Are you sure to delete?');" type="button" class="btn btn-danger">
                                        Delete
                                        </a>
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