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
}
