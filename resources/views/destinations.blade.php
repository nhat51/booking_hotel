@extends('front.layout.master')
@section('title','Destination')
@section('body')

<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>Destinations</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Destinations</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Inner banner end ================ -->

<!-- ================ Popular destinations ================ -->
<div class="popular-destinations pt-70 pb-40 position-relative">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
        <!-- popular destination box -->
        <div class="popular-destination-box">
          <div class="img-holder-overlay">
            <div class="img-holder"><img src="front/img/popular-destination/1.jpg" alt=""></div>
            <div class="overlay"><a href="#"><i class="fas fa-share"></i></a></div>
          </div>
          <div class="title">
            <h3><a href="#">Orlando</a></h3>
          </div>
        </div>
        <!-- popular destination box end -->
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
        <!-- popular destination box -->
        <div class="popular-destination-box">
          <div class="img-holder-overlay">
            <div class="img-holder"><img src="front/img/popular-destination/2.jpg" alt=""></div>
            <div class="overlay"><a href="#"><i class="fas fa-share"></i></a></div>
          </div>
          <div class="title">
            <h3><a href="#">Miami</a></h3>
          </div>
        </div>
        <!-- popular destination box end -->
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
        <!-- popular destination box -->
        <div class="popular-destination-box">
          <div class="img-holder-overlay">
            <div class="img-holder"><img src="front/img/popular-destination/3.jpg" alt=""></div>
            <div class="overlay"><a href="#"><i class="fas fa-share"></i></a></div>
          </div>
          <div class="title">
            <h3><a href="#">Los Angeles</a></h3>
          </div>
        </div>
        <!-- popular destination box end -->
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
        <!-- popular destination box -->
        <div class="popular-destination-box">
          <div class="img-holder-overlay">
            <div class="img-holder"><img src="front/img/popular-destination/4.jpg" alt=""></div>
            <div class="overlay"><a href="#"><i class="fas fa-share"></i></a></div>
          </div>
          <div class="title">
            <h3><a href="#">San Diego</a></h3>
          </div>
        </div>
        <!-- popular destination box end -->
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
        <!-- popular destination box -->
        <div class="popular-destination-box">
          <div class="img-holder-overlay">
            <div class="img-holder"><img src="front/img/popular-destination/5.jpg" alt=""></div>
            <div class="overlay"><a href="#"><i class="fas fa-share"></i></a></div>
          </div>
          <div class="title">
            <h3><a href="#">Houston</a></h3>
          </div>
        </div>
        <!-- popular destination box end -->
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
        <!-- popular destination box -->
        <div class="popular-destination-box">
          <div class="img-holder-overlay">
            <div class="img-holder"><img src="front/img/popular-destination/6.jpg" alt=""></div>
            <div class="overlay"><a href="#"><i class="fas fa-share"></i></a></div>
          </div>
          <div class="title">
            <h3><a href="#">New York</a></h3>
          </div>
        </div>
        <!-- popular destination box end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Popular destinations end ================ -->
@endsection
