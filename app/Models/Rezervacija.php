<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
    use HasFactory;
    protected $guarded=[''];

    public function hotelska_soba(){
        return $this->hasOne(HotelskaSoba::class);
    }
    public function gost(){
        return $this->belongsTo(Gost::class);
    }
}
