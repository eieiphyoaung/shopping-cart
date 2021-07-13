@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h5 class="mb-3">Shipping Address</h5>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <form method="POST" action="{{ route('checkout.save-order') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name <span style="color: #f05153;">*</span></label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="name">Address <span style="color: #f05153;">*</span></label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="phone">Telephone <span style="color: #f05153;">*</span></label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
        

            <div class="payment-methods" slot="body">
                <h5 class="mt-5 mb-4">Payment Methods</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" id="cash-on-delivery" value="cash-on-delivery" checked>
                    <label class="form-check-label" for="cash-on-delivery">
                        Cash On Delivery
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" id="bank-transfer" value="bank-transfer">
                    <label class="form-check-label" for="bank-transfer">
                        Bank Transfer
                    </label>
                </div>
            </div>

            <div>
                <div class="mt-3">
                    <button type="submit" id="checkout-place-order-button" class="order-btn">
                        Place Order
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Cart Summery</h5>
                @php $total = 0 @endphp
                @foreach((array) session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                @endforeach
                <p>Cart Subtotal : <span class="text-info">$ {{ $total }}</span></p>
            </div>
        </div>
    </div>
</div>
@endsection