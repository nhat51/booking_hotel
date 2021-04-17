<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Bookings;
use App\Models\Destinations;
use App\Models\HotelComments;
use App\Models\Hotels;
use App\Models\Rooms;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function hotel($id){

        $hotel = Hotels::findOrFail($id);
        $room = Rooms::findOrFail($id);

        return view('front.hotel.show', compact('hotel', 'room'));
    }
    public function postComment(Request $request){
        HotelComments::create($request->all());

        return redirect()->back();
    }

    public function index(Request $request)
    {
        $hotels = Hotels::all();
        $booking = Bookings::all();
        $destinations = Destinations::all();



        $hotels = $this->filter($hotels,$request);


        return view('listhotel',compact('hotels','booking','destinations'));
    }
    public function filter($hotels,Request $request)
    {
        //Destination filter
        $destinations = $request->destinations ?? [];
        $destination_id = array_keys($destinations);
        $hotels = $destination_id != null ? $hotels->whereIn('destination_id',$destination_id) : $hotels;

        //Star ranking filter
        $ranking = $request->ranking ;
        $star_ranking = is_integer($ranking);
        $hotels = $star_ranking != null ? $hotels->select('star_ranking',$star_ranking) : $hotels;



        return $hotels;
    }

}
