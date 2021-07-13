@extends('admin.layouts.master')

@section('content')
 <!-- Main content -->
 <div class="content">
      <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
            <h4 style="margin-left:10px;margin-bottom:10px;">New Product</h4>
            <div class="card">
                <div class="card-body">
                    <form action="/admin/products/create" method="post" enctype="multipart/form-data">
                        @csrf
                        @if($errors->has('name'))
                            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="name">Product Name</label> <span style="color:red;">*</span>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div> 
                        @if($errors->has('description'))
                            <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="description">Description</label><span style="color:red;">*</span>
                            <textarea name="description" class="form-control" cols="30" rows="10">{{ old('description') }}</textarea>
                        </div>
                        @if($errors->has('price'))
                            <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="price">Price</label><span style="color:red;">*</span>
                            <input type="number" name="price" class="form-control" value="{{ old('price') }}"> 
                        </div>
                        @if($errors->has('image'))
                            <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="image">Image</label><span style="color:red;">*</span>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="SUBMIT">
                            <a href="/admin/products" class="btn btn-warning">Back</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection