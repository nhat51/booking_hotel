<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Hotels;
use App\Models\RoomImages;
use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function listroom($id){
        $hotel = Hotels::findOrFail($id);
        $rooms = Rooms::paginate(5);


        return view('roomdetail',compact('hotel', 'rooms'));
    }
}
