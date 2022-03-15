<?php

namespace Database\Seeders;

use App\Models\Gost;
use App\Models\Hotel;
use App\Models\HotelskaSoba;
use App\Models\Rezervacija;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();

        //todo popuni bazu koristeci seeder
        Gost::truncate();
        Hotel::truncate();
        HotelskaSoba::truncate();

        $gosti = Gost::factory(4)->create();
        //hotelska soba-obavezno dodaj rucno hotel_id!

        $hoteli = Hotel::factory(3)->create();
        $brSobaHotel=3;
        foreach ($hoteli as $hotel) {
            HotelskaSoba::factory($brSobaHotel)->create([
                'hotel_id' => $hotel['id']
            ]);
        }

        foreach ($gosti as $gost) {
            $idSobe = random_int(1,count($hoteli)*$brSobaHotel);
            Rezervacija::factory()->create([
                'gost_id' => $gost['id'],
                'hotelska_soba_id' => $idSobe
            ]);
        }

    }
}
