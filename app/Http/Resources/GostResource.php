<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap="Gost";
    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id,
            'broj_dokumenta'=>$this->resource->broj_dokumenta,
            'ime'=>$this->resource->ime,
            'prezime'=>$this->resource->prezime,
            'datum_rodjenja'=>$this->resource->datum_rodjenja,
            'email'=>$this->resource->email,
            'br_telefona'=>$this->resource->br_telefona	,
            'pol'=>$this->resource->pol,
            'strani_gost'=>$this->resource->strani_gost
        ];
    }
}
