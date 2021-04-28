@extends('front.layout.master')

@section('title', 'Payment Information')

@section('body')

<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>Payment Information</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Payment Information</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Inner banner end ================ -->

<!-- ================ Payment Information page ================ -->
<div class="detail-page pt-70 pb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 mb-30">
        <form class="form-style-1">
          <h4 class="mb-15">Card Details</h4>
          <div class="card-type">
            <div class="row">
              <div class="col-lg-6 mb-20">
                <div class="card-type-img border rounded p-20 text-center position-relative">
                  <input class="form-check-input" type="radio" name="option2" value="option2">
                  <img src="front/img/card-type-img-1.jpg" alt=""> </div>
              </div>
              <div class="col-lg-6 mb-20">
                <div class="card-type-img border rounded p-20 text-center position-relative">
                  <input class="form-check-input" type="radio" name="option2" value="option2">
                  <img src="front/img/card-type-img-2.jpg" alt=""> </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Card Holder Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Card Number<span class="text-danger">*</span></label>
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label>Expiry Mounth<span class="text-danger">*</span></label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label>Expiry Year<span class="text-danger">*</span></label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label>CVC<span class="text-danger">*</span></label>
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label font-size-14" for="exampleCheck1">By continuing, you agree to the <a href="#">Terms and Conditions.</a></label>
          </div>
          <button type="submit" class="btn-style-1">Confirm Booking</button>
        </form>
      </div>
      <div class="col-lg-4 col-md-4">
        <aside>
          <!-- filter widget -->
          <div class="filter-widget mb-20">
            <div class="accordion filter-accordion" id="filter-widget-accordion4-d">
              <div class="card">
                <div class="card-header" id="headingOne4-d"> <a class="btn btn-link w-100 text-left" href="#" data-toggle="collapse" data-target="#collapseOne4-m" aria-expanded="true" aria-controls="collapseOne4-m">
                  <!-- title widget -->
                  <div class="filter-title-widget">
                    <h3>Billing Details <i class="fas fa-plus-square float-right"></i> <i class="fas fa-minus-square float-right"></i></h3>
                  </div>
                  <!-- title widget end -->
                  </a> </div>
                <div id="collapseOne4-m" class="collapse show mt-10" aria-labelledby="headingOne4-d" data-parent="#filter-widget-accordion4-d">
                  <div class="card-body">
{{--                    <ul class="list-inline select-all mb-10">--}}
{{--                      <li class="list-inline-item">Hilton Miami Downtown</li>--}}
{{--                    </ul>--}}
                    <div class="table-responsive">
                      <table class="table table-bordered bg-gray w-100 border-0">
                        <tr>
                          <td>Check In</td>
                          <td>{{session('checkinday')}}</td>
                        </tr>
                        <tr>
                          <td>Check Out</td>
                          <td>{{session('checkoutday')}}</td>
                        </tr>
                        <tr>
                          <td>Room</td>
                          <td>{{session('roomType')}}</td>
                        </tr>
                          <tr>
                              <td>Room</td>
                              <td>{{session('roomPrice')}}</td>
                          </tr>
                      </table>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered bg-gray mb-0 w-100 border-0">
                        <tr>
                          <th>Pay Amount</th>
                          <th>{{session('roomPrice')}}</th>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- filter widget end -->
          <!-- help us -->
          <div class="help-us mb-30">
            <h3>How can we help you?</h3>
            <p>Lorem ipsum dolor sit ametdf consectetur adipiscing elitdgsh ametdf consectetur piscing.</p>
            <a class="view-detail-btn" href="#"><i class="fas fa-phone-alt"></i> Contact Us</a> </div>
          <!-- help us end -->
        </aside>
      </div>
    </div>
  </div>
</div>
<!-- ================ Payment Information page end ================ -->

@endsection
