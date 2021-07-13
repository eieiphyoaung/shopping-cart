@extends('admin.layouts.master')

@section('content')
<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Transactions</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Payment Method</th>
                      <th style="width: 40px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @php $count = 1; @endphp
                      @foreach($orders as $order)
                        <tr>
                            <td> {{ $count ++ }} </td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->payment_method }}</td>
                            <td>
                                <div class="btn-group">
                                    <div class="container">
                                        <a href="/admin/transactions/{{$order->id}}" type="button" class="btn btn-warning">View</a>
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