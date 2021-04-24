<?php

namespace App\Http\Controllers;

use App\Models\Destinations;
use App\Models\Hotels;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $popularhotels = Hotels::all();
        $populardestinations = Destinations::all();

        return view('index',compact('popularhotels','populardestinations'));
    }

//    public function search(Request $request)
//    {
//        $keysearch = $request-> search;
//
//        $checkinDate = $request-> checkin;
//        $checkoutDate = $request-> checkout;
//
//        session(['checkinday' => $checkinDate,'checkoutday'=>$checkoutDate]);
//
//        $hotels = Hotels::all();
//        $destinations = Destinations::all();
//
//        $search_all = Hotels::where('name','like','%' . $keysearch . '%')
//            ->orwhere('city','like','%' . $keysearch . '%')
//            ->get();
//
//        return view('search',compact('search_all','hotels','destinations'));
//    }
}
