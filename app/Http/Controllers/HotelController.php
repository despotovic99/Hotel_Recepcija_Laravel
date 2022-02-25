<?php

namespace App\Http\Controllers;

use App\Http\Resources\HotelCollection;
use App\Http\Resources\HotelResource;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoteli=Hotel::all();
        return new HotelCollection($hoteli);
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
        $validator= Validator::make($request->all(),[
            'naziv'=>'required|string',
            'adresa'=>'required|string',
            'broj_zvezdica'=>'required|string'

        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $hotel = Hotel::create([
            'naziv'=>$request->naziv,
            'adresa'=>$request->adresa,
            'broj_zvezdica'=>$request->broj_zvezdica,

        ]);
        return response()->json(['Uspesno sacuvan hotel.',new HotelResource($hotel)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return new HotelResource($hotel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $validator= Validator::make($request->all(),[
            'naziv'=>'required|string',
            'adresa'=>'required|string',
            'broj_zvezdica'=>'required|string'

        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }
        $hotel-> naziv=$request->naziv;
        $hotel->adresa=$request->adresa;
        $hotel->broj_zvezdica=$request->broj_zvezdica;
        $hotel->save();

        return response()->json(['Uspesno izmenjen hotel!',new HotelResource($hotel)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return response()->json('Uspesno obrisan hotel!');
    }
}
