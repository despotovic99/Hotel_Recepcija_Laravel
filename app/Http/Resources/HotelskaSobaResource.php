<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelskaSobaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'broj'=>$request->broj,
            'sprat'=>$request->sprat,
            'broj_kreveta'=>$request->broj_kreveta,
            'hotel'=>$request->hotel,
            'terasa'=>$request->terasa,
            'kuhinja'=>$request->kuhinja,
            'minibar'=>$request->minibar,
        ];
    }
}
