<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Destinations;
use App\Models\Hotels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $popularhotels = Hotels::all();
        $populardestinations = Destinations::all();

        return view('index',compact('popularhotels','populardestinations'));
    }
    public function listhotel($id)
    {
        $hotels = Hotels::all();
        $destinations = Hotels::where('destination_id',$id)->get();

        return view('listhotel',compact('hotels','destinations'));
    }
}
