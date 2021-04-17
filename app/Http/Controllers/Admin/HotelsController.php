<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HotelsController extends Controller
{
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
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotels $hotels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotels $hotels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotels  $hotels
     * @return  \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Hotels $hotels)
    {
//        if (Gate::denies('delete-hotels')){
//            return redirect(route('admin.hotels.index'));
//        }
        dd($hotels);

//        $hotels->rooms()->detach();
//        $hotels->delete();
//
//        return redirect()->route('admin.hotels.index');
    }
}
