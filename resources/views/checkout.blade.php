@extends('front.layout.master')
@section('title','Check Out')
@section('body')

<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>Traveler Information</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Traveler Information</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Inner banner end ================ -->

<!-- ================ Traveler Information page ================ -->
<div class="detail-page pt-70 pb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-6">
        <form class="form-style-1" method="post" action="">
            @csrf
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Salutation<span class="text-danger">*</span></label>
                  <select class="form-control" name="salutation">
                      <option value="0">- Select -</option>
                      <option value="MR">Mr.</option>
                      <option value="MRS">Mrs.</option>
                      <option value="MIS">Miss</option>
                      <option value="MS">Ms.</option>
                      <option value="MST">Master</option>
                  </select>

              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Gender<span class="text-danger">*</span></label>
                  <select class="form-control" name="gender">
                      <option value="0">- Select -</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                  </select>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>First Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="first_name">
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label>Last Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="last_name">
              </div>
            </div>
          </div>
          <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Email Address<span class="text-danger">*</span></label>
                            <input type="text" @if(\Illuminate\Support\Facades\Auth::check()) value="{{Auth::user()->email}}" @endif class="form-control" name="email" >
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Date of Birth<span class="text-danger">*</span></label>
                            <input type="text" id="datepickerdob" class="form-control" name="date_of_birth">
                          </div>
                        </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Country <span class="text-danger">*</span></label>
                  <input type="text"  class="form-control" name="country">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Mobile Number<span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="1234567899" name="phone">
              </div>
            </div>
          </div>

          <button type="submit" class="btn-style-1">Continue with payment</button>
        </form>
      </div>
      <div class="col-lg-5 col-md-6">

          <!-- filter widget -->
          <div class="filter-widget mb-20">
            <div class="accordion filter-accordion" id="filter-widget-accordion4-d">
              <div class="card">
                <div class="card-header" id="headingOne4-d"> <a class="btn btn-link w-100 text-left" href="#" data-toggle="collapse" data-target="#collapseOne4-m" aria-expanded="true" aria-controls="collapseOne4-m">
                  <!-- title widget -->
                  <div class="filter-title-widget">
                    <h3>Hotel Details <i class="fas fa-plus-square float-right"></i> <i class="fas fa-minus-square float-right"></i></h3>
                  </div>
                  <!-- title widget end -->
                </a> </div>
                <div id="collapseOne4-m" class="collapse show mt-10" aria-labelledby="headingOne4-d" data-parent="#filter-widget-accordion4-d">
                  <div class="card-body">
                    <ul class="list-inline select-all mb-10">
                      <li class="list-inline-item">Hilton Miami Downtown</li>
                    </ul>
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
                          <td>Room </td>
                          <td>{{session('roomType')}}</td>
                        </tr>
                          <tr>
                              <td>Price </td>
                              <td>{{session('roomPrice')}}</td>
                          </tr>
                        <tr>
                        </tr>
                      </table>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered bg-gray mb-0 w-100 border-0">
{{--                        <tr>--}}
{{--                          <td>Adult Price</td>--}}
{{--                          <td>$900</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                          <td>Children Price</td>--}}
{{--                          <td>$0</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                          <td>Infant Price</td>--}}
{{--                          <td>$0</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                          <td>Subtotal</td>--}}
{{--                          <td>$0</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                          <td>Tex</td>--}}
{{--                          <td>0%</td>--}}
{{--                        </tr>--}}
                        <tr>
                          <th>Pay Amount</th>
                          <th>{{session(('roomPrice'))}}<sup>₫</sup></th>
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
      </div>
    </div>
  </div>
</div>
<!-- ================ Traveler Information page end ================ -->

@endsection
