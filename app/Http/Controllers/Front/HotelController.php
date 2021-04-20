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
        $ranking = $request->ranking;
        $hotels = $ranking != null ? $hotels->whereIn('star_ranking',$ranking) : $hotels;

        //Price filter
        $price = $request->pricefilter;
        switch ($price){
            case 'range1':
                $minPrice = 1000000;
                $maxPrice = 2000000;
                $hotels->whereBetween('price',[$minPrice,$maxPrice]);
                break;
            case 'range2':
                $minPrice = 2000000;
                $maxPrice = 3000000;
                $hotels->whereBetween('price',[$minPrice,$maxPrice]);
                break;
            case 'range3':
                $minPrice = 3000000;
                $maxPrice = 4000000;
                $hotels->whereBetween('price',[$minPrice,$maxPrice]);
                break;
            case 'range4':
                $minPrice = 4000000;
                $maxPrice = 5000000;
                $hotels->whereBetween('price',[$minPrice,$maxPrice]);
                break;
            case 'range5':
                $minPrice = 5000000;
                $maxPrice = 6000000;
                $hotels->whereBetween('price',[$minPrice,$maxPrice]);
                break;
            case 'range6':
                $hotels->where('price','>',6000000);
                break;
//            default:
//                $hotels = $hotels->orderBy('price','ASC');
//                break;
        }



        return $hotels;

    }

}
