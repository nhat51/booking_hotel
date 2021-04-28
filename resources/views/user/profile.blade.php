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
                <div class="col-lg-4 col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        My Booking
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="list-group list-group-flush">
                                        <a class="list-group-item list-group-item-action active" href="#">Hotel Bokking</a>
                                        <a class="list-group-item list-group-item-action" href="#">Hotel Ratting</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Account Management
                        </div>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <div class="card-body">
                                <h5 class="card-title">Account Infomation</h5>
                                <div class="row pt-2">
                                    <div class="col-lg-4"><strong>Name:</strong></div>
                                    <div class="col-lg-8">{{\Illuminate\Support\Facades\Auth::user()->name}}</div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col-lg-4"><strong>Email:</strong></div>
                                    <div class="col-lg-8">{{\Illuminate\Support\Facades\Auth::user()->email}}
                                    @if(\Illuminate\Support\Facades\Auth::user()->email_verified_at == null)
                                            <span class="badge badge-danger">Not Verified</span>
                                            <div class="alert alert-warning" role="alert">
                                                Email is not verified. Request to resend verification email <a
                                                    href="{{route('verification.notice')}}">here</a>.
                                            </div>
                                        @else
                                            <span class="badge badge-success">Verified</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col-lg-4">
                                        <strong>Address:</strong>
                                    </div>
                                    <div class="col-lg-8"></div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col-lg-4">
                                        <strong>Province/City:</strong>
                                    </div>
                                    <div class="col-lg-8"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{route('password.request')}}" class="btn btn-sm btn-primary">Changes password</a>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ================ Traveler Information page end ================ -->

@endsection
{{--                        avatar--}}
{{--<div class="col-lg-4 float-left"><!--left col-->--}}
{{--    <div class="text-center">--}}
{{--        <div class="avatar-contain">--}}
{{--            <img src="front/img/user/{{ $users->traveler->avatar ?? 'default-avatar.jpg'}}" class="avatar-pic img-circle " alt="avatar">--}}
{{--            <div class="avatar-overlay pt-70">--}}
{{--                <label class="btn mt-3" for="avatar">Change Avatar</label>--}}
{{--                <form action="{{ url('front\img\user') }}" enctype="multipart/form-data" method="POST">--}}
{{--                    {{ csrf_field() }}--}}
{{--                    <input type="file" name="filesTest" required="true">--}}
{{--                    <br/>--}}
{{--                    <button class="btn" type="submit">Changes</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <p class="text-center btn"  data-toggle="modal" data-target="#myModal"><i>Change password</i></p>--}}
{{--    <div class="modal fade password-change" id="myModal" tabindex="-1">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title">Change password</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--                </div>--}}
{{--                <form action="profile/change-password" method="post">--}}
{{--                    @csrf--}}
{{--                    <div class="modal-body">--}}
{{--                        <label for="old-password">Current password:</label>--}}
{{--                        <input type="password" name="password" id="old-password" required>--}}
{{--                        <label for="new-password">New password:</label>--}}
{{--                        <input type="password" name="new_password" id="new-password" required>--}}
{{--                        <label for="cnew-password">Confirm new password:</label>--}}
{{--                        <input type="password" name="cnew_password" id="cnew-password" required>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                        <button type="submit" class="btn btn-primary">Save changes</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--                        avatar end--}}
