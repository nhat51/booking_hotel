@extends('front.layout.master')
@section('title', 'Profile')

@section('body')

    <!-- ================ Inner banner ================ -->
    <div class="inner-banner inner-banner-bg pt-70 pb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 mb-30">
                    <!-- page-title -->
                    <div class="page-title">
                        <h1>My Profile</h1>
                    </div>
                    <!-- page-title end -->
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">My Profile</li>
                    </ol>
                    <!-- breadcrumb end -->
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Hotels page ================ -->
    <div class="pt-70 pb-70">
        <div class="container">
            @if(\Illuminate\Support\Facades\Auth::check())
            <div class="gtco-section pt-2">
                <div class="gtco-container profile_form ">
                    <div class="row pt-5">
                        <div class="col-sm-3"><!--left col-->
                            <div class="text-center">
                                <img src="front/img/user/{{ $users->traveler->avatar ?? 'default-avatar.jpg'}}" class="avatar-pic img-circle " alt="avatar">
                                <label class="btn mt-3" for="avatar">Change Avatar</label>
                                <form action="{{ url('front\img\user') }}" enctype="multipart/form-data" method="POST">
                                    {{ csrf_field() }}
                                    <input type="file" name="filesTest" required="true">
                                    <br/>
                                    <input type="submit" value="upload">
                                </form>
                            </div>
                            <p style="text-align: center;cursor:pointer;"  data-toggle="modal" data-target="#myModal"><i>Change password</i></p>
                            <div class="modal fade password-change" id="myModal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Change password</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="profile/change-password" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <label for="old-password">Current password:</label>
                                                <input type="password" name="password" id="old-password" required>
                                                <label for="new-password">New password:</label>
                                                <input type="password" name="new_password" id="new-password" required>
                                                <label for="cnew-password">Confirm new password:</label>
                                                <input type="password" name="cnew_password" id="cnew-password" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!--/col-3-->
                        <div class="col-sm-9">
                            <div class="col-sm-12">
                                @if(session('success'))
                                    <h5 style="color: #0ac5a9;font-style: italic;font-size: 14px">{{session('success')}}</h5>
                                @endif
                                @if($errors->any())
                                    <h5 style="color: red;font-style: italic;font-size: 14px">FAILED!</h5>
                                    @foreach($errors->all() as $error)
                                        <h5 style="color: red;font-style: italic;font-size: 14px">{{$error}}</h5>
                                    @endforeach
                                @endif

                            </div>
                            <form class="form" action="profile/update" method="post" id="registrationForm">
                                @csrf
                                <div class="col-xs-6">
                                    <label for="first_name"><h4>First name</h4></label>
                                    <input type="text" class="form-control" name="first_name" value="" id="first_name" required placeholder="first name" title="enter your first name if any.">
                                </div>
                                <div class="col-xs-6">
                                    <label for="last_name"><h4>Last name</h4></label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" value="" required placeholder="last name" title="enter your last name if any.">
                                </div>
                                <div class="col-xs-6">
                                    <label for="phone"><h4>Phone</h4></label>
                                    <input type="tel" class="form-control" name="phone" value="" id="phone" required placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                                <div class="col-xs-6">
                                    <label for="credit_card"><h4>Credit card number</h4></label>
                                    <input type="text" class="form-control" name="credit_card" id="credit_card" value="" required placeholder="enter mobile number" title="enter your credit card number">
                                </div>
                                <div class="col-xs-6">
                                    <label for="youremail"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="youremail" value="" required placeholder="you@email.com" title="enter your email.">
                                </div>
                                <div class="col-xs-6">
                                    <label for="address"><h4>Address</h4></label>
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Your address" value="" title="enter your address" required>
                                </div>

                                <div class="col-xs-6">
                                    <label for="sexs"><h4>Sex</h4></label>
                                    <input id="sex" name="sex" list="sexs" class="form-control" placeholder="Sex" value="" required>
                                    <datalist id="sexs">
                                        <option value="Male">
                                        <option value="Female">
                                    </datalist>
                                </div>

                                <div class="col-xs-6">
                                    <label for="age"><h4>Date of Birth</h4></label>
                                    <input type="date" id="age" name="age" class="form-control" value="" placeholder="Date Of Birth" required>
                                </div>

                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-primary edit" type="button">Edit</button>
                                    <button class="btn btn-lg save btn-primary pull-right" type="submit" >Save</button>
                                    <button class="btn btn-lg cancel btn-secondary pull-right" type="reset">Cancel</button>
                                </div>
                            </form>

                        </div><!--/tab-pane-->
                    </div><!--/tab-pane-->
                </div>
            </div>
            @endif
        </div>
    </div>

@endsection

