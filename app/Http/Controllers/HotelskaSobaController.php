<?php

namespace App\Http\Controllers;

use App\Http\Resources\HotelskaSobaCollection;
use App\Http\Resources\HotelskaSobaResource;
use App\Models\HotelskaSoba;
use Illuminate\Http\Request;

class HotelskaSobaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sveSobe=HotelskaSoba::all();
        return new HotelskaSobaCollection($sveSobe);
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
     * @param  \App\Models\HotelskaSoba  $hotelskaSoba
     * @return \Illuminate\Http\Response
     */
    public function show(HotelskaSoba $hotelskaSoba)
    {
        return new HotelskaSobaResource($hotelskaSoba);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HotelskaSoba  $hotelskaSoba
     * @return \Illuminate\Http\Response
     */
    public function edit(HotelskaSoba $hotelskaSoba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HotelskaSoba  $hotelskaSoba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HotelskaSoba $hotelskaSoba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HotelskaSoba  $hotelskaSoba
     * @return \Illuminate\Http\Response
     */
    public function destroy(HotelskaSoba $hotelskaSoba)
    {
        //
    }
}
