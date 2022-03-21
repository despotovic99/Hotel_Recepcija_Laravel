<?php

namespace App\Http\Controllers;

use App\Http\Resources\HotelskaSobaCollection;
use App\Http\Resources\HotelskaSobaResource;
use App\Models\HotelskaSoba;
use App\Rules\PostojiHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator= Validator::make($request->all(),[
            'broj'=>'required|integer',
            'sprat'=>'required|integer',
            'broj_kreveta'=>'required|integer',
            'hotel_id'=>['required','integer',new PostojiHotel()],
            'terasa'=>'required|boolean',
            'kuhinja'=>'required|boolean',
            'minibar'=>'required|boolean',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $hotelskaSoba = HotelskaSoba::create([
            'broj'=>$request->broj,
            'sprat'=>$request->sprat,
            'broj_kreveta'=>$request->broj_kreveta,
            'hotel_id'=>$request->hotel_id,
            'terasa'=>$request->terasa,
            'kuhinja'=>$request->kuhinja,
            'minibar'=>$request->minibar,

        ]);
        return response()->json(['Uspesno sacuvana hotelska soba.',new HotelskaSobaResource($hotelskaSoba)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HotelskaSoba  $hotelskaSoba
     * @return \Illuminate\Http\Response
     */
    public function show(HotelskaSoba $hotelskaSoba)
    {
        return response()->json($hotelskaSoba);
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
        $validator= Validator::make($request->all(),[
            'broj'=>'required|integer',
            'sprat'=>'required|integer',
            'broj_kreveta'=>'required|integer',
            'hotel_id'=>['required','integer',new PostojiHotel()],
            'terasa'=>'required|boolean',
            'kuhinja'=>'required|boolean',
            'minibar'=>'required|boolean',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

            $hotelskaSoba->broj=$request->broj;
            $hotelskaSoba->sprat=$request->sprat;
            $hotelskaSoba->broj_kreveta=$request->broj_kreveta;
            $hotelskaSoba->hotel_id=$request->hotel_id;
            $hotelskaSoba->terasa=$request->terasa;
            $hotelskaSoba->kuhinja=$request->kuhinja;
            $hotelskaSoba->minibar=$request->minibar;

            $hotelskaSoba->save();

            return response()->json(['Uspesno azurirana hotelska soba. ', new HotelskaSobaResource($hotelskaSoba)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HotelskaSoba  $hotelskaSoba
     * @return \Illuminate\Http\Response
     */
    public function destroy(HotelskaSoba $hotelskaSoba)
    {
        $hotelskaSoba->delete();
        return response()->json('Uspesno obrisana hotelska soba.');
    }
}
