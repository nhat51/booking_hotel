<?php

namespace App\Http\Controllers;

use App\Models\Travelers;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $travelers = Travelers::all();
        $user = User::all();

        return view('user.profile', compact('user', 'travelers'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Travelers  $travelers
     * @return \Illuminate\Http\Response
     */
    public function show(Travelers $travelers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Travelers  $travelers
     * @return \Illuminate\Http\Response
     */
    public function edit(Travelers $travelers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Travelers  $travelers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travelers $travelers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Travelers  $travelers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travelers $travelers)
    {
        //
    }
}
