<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Hotels;
use App\Models\Rooms;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function list($id){

        $hotel = Hotels::findOrFail($id);
        $room = Rooms::findOrFail($id);

        return view('front.hotel.show', compact('hotel', 'room'));
    }
}
