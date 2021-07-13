@extends('admin.layouts.master')

@section('content')
<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Transaction Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                <?php
                    $items = App\Models\OrderItem::where('order_id',$order->id)->get();
                    $total = 0;
                    foreach($items as $item){
                        $total += $item->quantity * $item->price;
                    }
                ?>
                  <tbody>
                        <tr>
                            <td>Name</td>
                            <td>{{ $order->name}}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{ $order->address}}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $order->phone}}</td>
                        </tr>
                        <tr>
                            <td>Items Purchased</td>
                            <td>
                                <?php

                                ?>
                                @foreach($items as $item)
                                    @php 
                                    $product = App\Models\Product::find($item->product_id);
                                    @endphp
                                    {{ $product->name }} <br> <b>Quantity</b> &nbsp;&nbsp;:&nbsp;&nbsp;{{$item->quantity}} <br> <b>Price</b> &nbsp;&nbsp;:&nbsp;&nbsp;${{$item->price}}<br><br>
                                @endforeach
                            </td>
                        <tr>
                            <td>Total</td>
                            <td>$ {{ $total }}</td>
                        </tr>
                        <tr>
                          <td>Ordered Date</td>
                          <td>{{date('Y F d', strtotime($order->created_at))}}</td>
                        </tr>
                        <tr>
                            <td>Payment Method</td>
                            <td>{{ $order->payment_method}}</td>
                        </tr>
                  </tbody>
                </table> <br>
                <div class="form-group">
                    <a href="/admin/transactions" class="btn btn-warning">Back</a>
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