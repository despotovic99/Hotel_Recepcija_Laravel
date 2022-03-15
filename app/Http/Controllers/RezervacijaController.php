<?php

namespace App\Http\Controllers;

use App\Http\Resources\RezervacijaCollection;
use App\Http\Resources\RezervacijaResource;
use App\Models\Rezervacija;
use App\Rules\PostojiGost;
use App\Rules\PostojiHotelskaSoba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RezervacijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sveRezervacije=Rezervacija::all();
        return new RezervacijaCollection($sveRezervacije);
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
        $validator = Validator::make($request->all(),[
            'hotelska_soba_id'=>['required','integer',new PostojiHotelskaSoba()],
            'gost_id'=>['required','integer',new PostojiGost()],
            'datum_od'=>'required|date',
            'datum_do'=>'required|date',
            'cena'=>'required|float'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }
        $rezervacija=Rezervacija::create([
            'hotelska_soba_id'=>$request->hotelska_soba_id,
            'gost_id'=>$request->gost_id,
            'datum_od'=>$request->datum_od,
            'datum_do'=>$request->datum_do,
            'cena'=>$request->cena,
        ]);

        return response()->json(['Uspesno sacuvana reyervacija',new RezervacijaResource($rezervacija)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rezervacija  $rezervacija
     * @return \Illuminate\Http\Response
     */
    public function show(Rezervacija $rezervacija)
    {
        return new RezervacijaResource($rezervacija);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rezervacija  $rezervacija
     * @return \Illuminate\Http\Response
     */
    public function edit(Rezervacija $rezervacija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rezervacija  $rezervacija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rezervacija $rezervacija)
    {
        $validator = Validator::make($request->all(),[
            'hotelska_soba_id'=>['required','integer',new PostojiHotelskaSoba()],
            'gost_id'=>['required','integer',new PostojiGost()],
            'datum_od'=>'required|date',
            'datum_do'=>'required|date',
            'cena'=>'required|float'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $rezervacija->hotelska_soba_id=$request->hotelska_soba_id;
        $rezervacija->gost_id=$request->gost_id;
        $rezervacija->datum_od=$request->datum_od;
        $rezervacija->datum_do=$request->datum_do;
        $rezervacija->cena=$request->cena;

        $rezervacija->save();

        return response()->json(['Uspesno azurirana reyervacija. ', new RezervacijaResource($rezervacija)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rezervacija  $rezervacija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rezervacija $rezervacija)
    {
        $rezervacija->delete();
        return response()->json('Uspesno obrisana rezervacija.');
    }
}
