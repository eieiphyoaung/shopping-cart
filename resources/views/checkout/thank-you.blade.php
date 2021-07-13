@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
            <p>Thank you for your order.</p>
            <a href="{{ url('/') }}" class="btn btn-signin"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i> Continue Shopping</a>
        </div>
    </div>
</div>
@endsection