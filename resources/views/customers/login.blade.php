@extends('layouts.master')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row">
            <div class="col-lg-4 col-md-4 offset-lg-4">
                <div class="heading">
                    <a href="/register" class="btn-new-customer">
                        <button type="submit" class="btn btn-block btn-register">Sign Up</button>
                    </a>
                </div>
                <div class="card">
                    <h5 class="card-header text-center">Login</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('customer.login') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
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