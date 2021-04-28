<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Travelers;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        return view('checkout');
    }
    public function booking(Request $request){
        $booking = new Bookings();

        $booking->date_to = $request->checkout;
        $booking->date_from = $request->checkin;
        $booking->room_id = $request->roomId;
        $booking->total = $request->roomprice;
        $booking -> email = $request->email;
        $booking -> phone = $request->phone;
        $booking -> name = $request->last_name;

        $booking->save();
        return 'success';
    }
}
