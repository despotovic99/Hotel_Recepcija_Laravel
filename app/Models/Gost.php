<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gost extends Model
{
    use HasFactory;

    protected $guarded=[''];

    public function rezervacija(){
        return $this->hasMany(Rezervacija::class);
    }

}
