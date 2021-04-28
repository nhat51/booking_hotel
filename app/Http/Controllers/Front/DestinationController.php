<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Bookings;
use App\Models\Destinations;
use App\Models\Hotels;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    //
    public function destinations(){

       $destinations = Destinations::all();
       $hotels = Hotels::all();

       return view('front.destination.destinations',compact('destinations','hotels'));
    }
    public function destinationDetail($id){
        $destinationDetail = Destinations::findOrFail($id);

        return view('front.destination.destination-detail', compact('destinationDetail'));
    }
    public function hotelInDestination($destinationId){
        $destinations = Destinations::all();
        $hotels = Hotels::where('destination_id', $destinationId)->get();
        $booking = Bookings::all();

        return view('listhotel', compact('destinations', 'hotels','booking'));
    }
}
