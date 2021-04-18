<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destinations;
use App\Models\HotelAmenities;
use App\Models\HotelImages;
use App\Models\Hotels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HotelsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotels::all();
        return view('admin.hotels.index')->with('hotels', $hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotels  $hotel
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function edit(Hotels $hotel)
    {
        if (Gate::denies('edit-hotels')){
            return redirect(route('admin.hotels.index'));
        }

        $destinations = Destinations::all();
        $amenities = HotelAmenities::all();
        $hotelImages = HotelImages::all();
        return view('admin.hotels.edit')->with([
            'hotel' => $hotel,
            'destinations' => $destinations,
            'hotelAmenities' => $amenities,
            'hotelImages' => $hotelImages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Hotels $hotels)
    {
//        $hotels->hotel_amenities()->sync($request->amenities);

        $hotels->name = $request->name;
        $hotels->destination_id = $request ->destination;
        $hotels->address = $request->address;
        $hotels->district = $request->district;
        $hotels->city = $request->city;
        $hotels->star_ranking = $request->star_ranking;
        $hotels->description = $request->description;

        if($hotels->save()){
            $request->session()->flash('success','Hotel "'. $hotels->name . '" has been updated!');
        }else{
            $request->session()->flash('error', 'There was an error updating hotel information!');
        }

        return redirect()->route('admin.hotels.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotels  $hotels
     * @return  \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Hotels $hotels)
    {
        if (Gate::denies('delete-hotels')){
            return redirect(route('admin.hotels.index'));
        }



        dd($hotels);

    }
}
