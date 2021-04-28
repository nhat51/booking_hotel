<!-- rooms -->
<h4 class="mb-6">Rooms</h4>
<div class="room-type-wrapper">
    <!-- list box -->

    @foreach($hotel->rooms as $room)
        @if($room->is_available == 1)
            <form action="./booking" method="post">
                {{csrf_field()}}
                <div class="list-box mb-30">
                <div class="list-box-img">
                    <a href="front/img/rooms-image/{{$room->room_images[0]->path }}" class="venobox" data-gall="gallery1">
                        <img src="front/img/rooms/{{ $room->room_images[0]->path }}" alt=""> </a>
{{--                    <div class="form-check">--}}
{{--                        <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                        <label class="form-check-label" for="exampleCheck1">Select Room</label>--}}
{{--                    </div>--}}
                </div>
                <div class="list-box-content">
                    <div class="list-box-title">
                        <h3>{{ $room->room_type }} Room <span>{{number_format( $room->price )}}<sup>₫</sup> <em>/ night</em></span>
                        </h3>
                        <input type="hidden" name="roomtype" value="{{ $room->room_type }}" >
                        <input type="hidden" name="roomprice" value="{{ $room->price }}">
                        <input type="hidden" name="roomId" value="{{ $room->id }}">
                        <address>
                            Max : {{$room->max_person}} Persons
                        </address>
                    </div>
                    <ul class="hotel-featured">
                        <li><span><i class="fas fa-car"></i> Parking Facility</span></li>
                        <li><span><i class="fas fa-bath"></i> Attached Bathroom</span></li>
                        <li><span><i class="fas fa-home"></i> Daily Housekeeping</span></li>
                        <li><span><i class="fas fa-swimming-pool"></i> Swimming Pool</span>
                        </li>
                    </ul>
                    <div class="btn-wrapper mt-20 d-inline-block w-100">
{{--                        <a class="view-detail-btn" href="#">View Details</a> --}}
{{--                        <a class="book-now-btn ml-6" href="#">Book Now</a>--}}
                        <button type="submit" class="book-now-btn ml-6" >Book Now</button>
                    </div>
                </div>
            </div>
            </form>
    @endif
@endforeach

<!-- list box end -->
</div>
<!-- rooms -->
