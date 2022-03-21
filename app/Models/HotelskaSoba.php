<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelskaSoba extends Model
{
    use HasFactory;
    protected $guarded=[''];

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

    public function rezervacija(){
        return $this->belongsToMany(Rezervacija::class);
    }
}
