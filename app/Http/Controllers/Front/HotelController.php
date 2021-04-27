<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Bookings;
use App\Models\Destinations;
use App\Models\HotelComments;
use App\Models\Hotels;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

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
        $booking = Rooms::all();
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

        if ($price == 'range1'){
            $minPrice = 1000000;
            $maxPrice = 2000000;
            $hotels = $price != null ? $hotels->whereBetween('price',[$minPrice,$maxPrice]) : $hotels;
        }
        elseif ($price == 'range2'){
            $minPrice = 2000000;
            $maxPrice = 3000000;
            $hotels = $price != null ? $hotels->whereBetween('price',[$minPrice,$maxPrice]) : $hotels;
        }
        elseif ($price == 'range3'){
            $minPrice = 3000000;
            $maxPrice = 4000000;
            $hotels = $price != null ? $hotels->whereBetween('price',[$minPrice,$maxPrice]) : $hotels;
        }
        elseif ($price == 'range4'){
            $minPrice = 4000000;
            $maxPrice = 5000000;
            $hotels = $price != null ? $hotels->whereBetween('price',[$minPrice,$maxPrice]) : $hotels;
        }
        elseif ($price == 'range5'){
            $minPrice = 5000000;
            $maxPrice = 6000000;
            $hotels = $price != null ? $hotels->whereBetween('price',[$minPrice,$maxPrice]) : $hotels;
        }
        elseif ($price == 'range6'){
            $hotels = $price != null ? $hotels->where('price','>',6000000) : $hotels;
        }


        return $hotels;
    }
    public function search(Request $request)
    {
        $keysearch = $request-> search;

        $checkinDate = $request-> checkin;
        $checkoutDate = $request-> checkout;

        session(['checkinday' => $checkinDate,'checkoutday'=>$checkoutDate]);

        $hotels = Hotels::all();
        $destinations = Destinations::all();

        $search_all = Hotels::where('name','like','%' . $keysearch . '%')
            ->orwhere('city','like','%' . $keysearch . '%')
            ->get();

        return view('search',compact('search_all','hotels','destinations'));
    }

    public function checkin(Request $request){
        $roomType = $request -> roomtype;
        $roomPrice = $request -> roomprice;

        if (session('type') != null && session('price') != null){
        $type = session('type');
        $price = session('price');
        array_push($type,$roomType);
        array_push($price,$roomPrice);
        session(['type'=>$type,'price'=>$price]);
        dd(session('type'),session('price'));

        }
        else{

            $type = array();
            $price = array();

            array_push($type,$roomType);
            array_push($price,$roomPrice);

            session(['type'=>$type,'price'=>$price]);
            }

        return back();

//        session(['roomType' => $roomType,'roomPrice'=>$roomPrice]);
//
//        return back()->with(['roomType',$roomType],['roomPrice',$roomPrice]);
    }
}
