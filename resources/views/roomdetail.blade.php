@extends('front.layout.master')

@section('body')
    <!-- ================ Inner banner ================ -->
    <div class="inner-banner inner-banner-bg pt-70 pb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 mb-30">
                    <!-- page-title -->
                    <div class="page-title">
                        <h1>Hotels Edit</h1>
                    </div>
                    <!-- page-title end -->
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.hotels.index') }}">Hotels Management</a>
                        </li>
                        <li class="breadcrumb-item active">Hotels Edit</li>
                    </ol>
                    <!-- breadcrumb end -->
                </div>
            </div>
        </div>
    </div>
    <!-- ================ List Room page ================ -->
    <div class="pt-70 pb-70 m-60">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Room Type</th>
                <th scope="col">Max Person</th>
                <th scope="col">Discount</th>
                <th scope="col">Price/per night</th>
                <th scope="col">Quantity</th>
                <th scope="col">Book room</th>
            </tr>
            </thead>
            <tbody>
            @foreach($hotel->rooms as $room)
               @if($room->is_available == 0)
               @else
            <tr>
                <th scope="row">
                    <label class="skype-color">{{ $room->room_type }}</label>
                    <img src="front/img/rooms/{{ $room->thumb}}" data-toggle="modal" data-target="#exampleModal">
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active w-100">
                                            <img src="front/img/rooms/img-big-01.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        @foreach($room->room_images as $img)
                                                <div class="carousel-item w-100">
                                                    <img src="front/img/rooms/{{ $img->path }}" class="d-block w-100" alt="...">
                                                </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </th>
                <td>
                    <i class="fa fa-user">x2</i>
                </td>
                <td>
                    <ul class="hotel-featured">
                       <p class="youtube-color">{{ $room->discount }}%</p>
                    </ul>
                </td>
                <td>{{ $room->price }}/night</td>
                <td>
                    <select class="form-control col-12" name="room" id="">
                        <option>1 phòng</option>
                        <option value="">2 phòng</option>
                        <option value="">3 phòng</option>
                        <option value="">4 phòng</option>
                        <option value="">5 phòng</option>
                    </select>
                </td>
                <td>
                    <a class="btn-danger btn-style-1" href="./traveler-information">Book</a>
                </td>
            </tr>
            @endif
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- pagination -->
 =
    <!-- pagination end -->
    <!-- ================ List Room end ================ -->
@endsection
