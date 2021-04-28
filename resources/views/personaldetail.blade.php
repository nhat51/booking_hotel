@extends('front.layout.master')
@section('title','Your Information')
@section('body')
<div class="row">
    <div class="col-8 border">
        <form class="form-style-1" method="post" action="">
            @csrf
            <h4 class="mb-15">Personal Information</h4>
            <fieldset disabled>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input id="disabledTextInput" class="disabled" value="{{$travelers->salutation}} {{$travelers->first_name}} {{$travelers->last_name}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Gender:</label>
                        <input class="disabled" value="{{$travelers->gender}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Email Address:</label>
                        <input  type="text" value="{{$travelers->email}}" class="disabled" name="email" >
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Date of Birth:</label>
                        <input type="text" value="{{ date('M d, y'),strtotime($travelers->date_of_birth) }}" class="disabled" name="date_of_birth">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Country:</label>
                        <input type="text" value="{{$travelers->country}}"  class="disabled" name="country">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Mobile Number:</label>
                        <input type="text" class="disabled" value="{{ $travelers->phone }}" name="phone">
                    </div>
                </div>
            </div>
            </fieldset>
        </form>
        <div class="col-8">
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
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Expiry Year<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>CVC<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label font-size-14" for="exampleCheck1">By continuing, you agree to the <a href="#">Terms and Conditions.</a></label>
                </div>
            </form>
        </div>
    </div>
    <div class="col-4">
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
                                <li class="list-inline-item">{{ session('hotelName') }}</li>
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
    </div>
</div>
@endsection
