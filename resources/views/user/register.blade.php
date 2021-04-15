@extends('front.layout.master')
@section('title','Register')
@section('body')
    <!-- ================ Inner banner ================ -->
    <div class="inner-banner inner-banner-bg pt-70 pb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 mb-30">
                    <!-- page-title -->
                    <div class="page-title">
                        <h1>Register</h1>
                    </div>
                    <!-- page-title end -->
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Register</li>
                    </ol>
                    <!-- breadcrumb end -->
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Register page ================ -->
    <div class="login-register-page pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <!-- register box -->
                    <div class="login-box">
                        <form class="form-style-1 shadow p-30" action="{{ route('user.save') }}" method="post">

                            @if(Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                                @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif

                            @csrf
                            <p>Don't have an account? Create your account, it takes less than a minute.</p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name"
                                       value="{{ old('name') }}">
                                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email"
                                       value="{{old('email')}}">
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password"
                                       name="password_confirm">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-style-1 w-100">Create an Account</button>
                            </div>
                            {{--thang refresh--}}
                            <br>
                            <p>I already have an account, <a href="{{ route('user.login') }}">Sign In</a></p>
                            {{--thang end refresh--}}
                        </form>
                    </div>
                    <!-- register box end -->
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Register page end ================ -->
@endsection

