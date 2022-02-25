<?php

namespace App\Http\Controllers;

use App\Http\Resources\GostCollection;
use App\Http\Resources\GostResource;
use App\Models\Gost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gosti = Gost::all();
        return new GostCollection($gosti);
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
           'broj_dokumenta'=>'required|string|max:10',
           'ime'=>'required|string',
           'prezime'=>'required|string',
           'datum_rodjenja'=>'required|date',
           'email'=>'required|string|unique',
           'br_telefona'=>'required|string',
           'pol'=>'required|string',
           'strani_gost'=>'required'

        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $gost = Gost::create([
            'broj_dokumenta'=>$request->broj_dokumenta,
            'ime'=>$request->ime,
            'prezime'=>$request->prezime,
            'datum_rodjenja'=>$request->datum_rodjenja,
            'email'=>$request->email,
            'br_telefona'=>$request->br_telefona,
            'pol'=>$request->pol,
            'strani_gost'=>$request->strani_gost
        ]);

        return response()->json(['Uspesno sacuvan gost!'],new GostResource($gost));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function show(Gost $gost)
    {
        return new GostResource($gost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function edit(Gost $gost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gost $gost)
    {
        $validator= Validator::make($request->all(),[
            'broj_dokumenta'=>'required|string|max:10',
            'ime'=>'required|string',
            'prezime'=>'required|string',
            'datum_rodjenja'=>'required|date',
            'email'=>'required|string|unique',
            'br_telefona'=>'required|string',
            'pol'=>'required|string',
            'strani_gost'=>'required|boolean'

        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $gost-> broj_dokumenta=$request->broj_dokumenta;
        $gost->ime=$request->ime;
        $gost->prezime=$request->prezime;
        $gost->datum_rodjenja=$request->datum_rodjenja;
        $gost->email=$request->email;
        $gost->br_telefona=$request->br_telefona;
        $gost->pol=$request->pol;
        $gost->strani_gost=$request->strani_gost;
        $gost->save();

        return response()->json(['Uspesno izmenjen gost!'],new GostResource($gost));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gost $gost)
    {
        $gost->delete();
        return response()->json('Uspesno obrisan gost!');
    }
}
