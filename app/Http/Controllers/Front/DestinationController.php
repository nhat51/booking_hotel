<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Destinations;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    //
    public function destinations(){

       $destinations = Destinations::all();

       return view('destinations',compact('destinations'));
    }
}
