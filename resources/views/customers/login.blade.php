@extends('layouts.master')

@section('content')
<main class="login-form mt-5">
    <div class="container">
        <div class="row justify-content-md-center align-items-center">
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <h5 class="card-header text-center">Login</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('customer.login') }}">
                            @csrf
                            @if(session('error'))
                                <div class="alert alert-danger">
                                {{ session('error') }}
                                </div> 
                            @endif
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                            @endif
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                    autofocus>
                            </div>

                            @if ($errors->has('password'))
                                <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                            @endif
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password">
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-block btn-signin">Signin</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection