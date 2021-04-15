@extends('front.layout.master')
@section('title','Sign In')
@section('body')
<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>Sign In</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Sign In</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Login page ================ -->
<div class="login-register-page pt-70 pb-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <!-- login box -->
        <div class="login-box">
          <form class="form-style-1 shadow p-30" action="{{ route('user.check') }}" method="post">
              @if(Session::get('fail'))
                  <div class="alert alert_danger">
                    {{ Session::get('fail') }}
                  </div>
                  @endif
              @csrf
            <p>Enter your e-mail and password below to log in to your account and use the benefits of our website.</p>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label font-size-14" for="exampleCheck1">Remember Me</label>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="forgot-password text-right"> <a href="#" class="text-danger">I forgot my password</a> </div>
              </div>
            </div>
            {{--thang refresh--}}
            <div class="form-group">
              <button type="submit" class="btn-style-1 w-100">Sign In</button>
            </div>
            <p class="mb-0">Don't have account? <a href="{{ route('user.register') }}">Sign up!</a></p>
              {{--thang end refresh--}}
          </form>
        </div>
        <!-- login box end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Login page end ================ -->
@endsection
