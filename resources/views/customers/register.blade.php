@extends('layouts.master')

@section('content')
<main class="signup-form mt-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">

                        <form action="{{ route('customer.register') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                @endif
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                 value="{{old('name')}}">
                            </div>

                            @if ($errors->has('email'))
                                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                            @endif
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" value="{{old('email')}}">
                            </div>

                            @if ($errors->has('password'))
                                <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                            @endif
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password">
                            </div>

                            @if ($errors->has('confirm_password'))
                                <div class="alert alert-danger">{{ $errors->first('confirm_password') }}</div>
                            @endif
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Confirm Password" id="confirm_password" class="form-control"
                                    name="confirm_password">
                            </div>

                            @if ($errors->has('profile'))
                                <div class="alert alert-danger">{{ $errors->first('profile') }}</div>
                            @endif
                            <div class="form-group form-group mb-3">
                                <label for="image">Profile</label><span style="color:red;">*</span>
                                <input type="file" name="profile" class="form-control">
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-block btn-register">Sign up</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection