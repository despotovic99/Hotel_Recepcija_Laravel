<?php

namespace App\Http\Controllers;

use App\Http\Resources\GostCollection;
use App\Models\Gost;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function show(Gost $gost)
    {
        $gost
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gost $gost)
    {
        //
    }
}
