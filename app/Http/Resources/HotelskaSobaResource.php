<?php

namespace App\Http\Resources;

use App\Models\Hotel;
use Illuminate\Http\Resources\Json\JsonResource;

class HotelskaSobaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap='Hotelska soba: ';
    public function toArray($request)
    {
        return [
            'broj'=>$this->resource->broj,
            'sprat'=>$this->resource->sprat,
            'broj_kreveta'=>$this->resource->broj_kreveta,
            'hotel'=>new HotelResource(Hotel::find($this->resource->hotel_id)),
            'terasa'=>$this->resource->terasa,
            'kuhinja'=>$this->resource->kuhinja,
            'minibar'=>$this->resource->minibar,
        ];
    }
}
