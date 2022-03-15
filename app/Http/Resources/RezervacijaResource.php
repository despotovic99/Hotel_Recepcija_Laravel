<?php

namespace App\Http\Resources;

use App\Models\HotelskaSoba;
use Illuminate\Http\Resources\Json\JsonResource;

class RezervacijaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap='Rezervacija: ';
    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id,
            'hotelska_soba_id'=>new HotelskaSobaResource(HotelskaSoba::find($this->resource->hotelska_soba_id)),
            'gost_id'=>new GostResource(Gost::find($this->resource->gost_id)),
            'datum_od'=>$this->resource->datum_od,
            'datum_do'=>$this->resource->datum_do,
            'cena'=>$this->resource->cena,
        ];
    }
}
