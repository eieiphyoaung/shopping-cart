<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
  
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                @if(count((array) session('cart')) > 0) 
                <button type="button" class="btn btn-info" data-toggle="dropdown" style="width:100px!important;">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
                    @if(count((array) session('cart')) > 0)
                    <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                    @endif
                </button>
                @else
                <button type="button" class="btn btn-info" data-toggle="dropdown" style="width:100px!important;" disabled>
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
                    @if(count((array) session('cart')) > 0)
                    <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                    @endif
                </button>
                @endif
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-4 col-sm-4 col-4">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-8 col-sm-8 col-8 total-section">
                            <p>Cart Subtotal : <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-3 col-sm-3 col-3 cart-detail-img">
                                    <img src="{{ $details['image'] }}" />
                                </div>
                                <div class="col-lg-9 col-sm-9 col-9 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> Price - $ {{ $details['price'] }} </span> <span class="text-info"> Quantity : {{ $details['quantity'] }}</span>
                                    <p>Total: <span class="text-info">$ {{$details['price'] * $details['quantity']}}</span></p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('cart') }}" class="btn btn-view-all btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/" style="color:#17a2b8 !important">Shopping Cart</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"></a>
                    </li>
                    @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width:100px!important;padding:10px!important;text-align:center!important;top:35px!important;left:-43px!important;box-shadow: 0px 3px 9px grey !important;">
                            <a class="dropdown-item custom" href="/logout">Logout</a>
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                    @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
  
<br/>
<div class="container">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  
@yield('scripts')
     
</body>
</html>