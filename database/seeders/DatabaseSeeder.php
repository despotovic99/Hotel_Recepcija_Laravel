<?php

namespace Database\Seeders;

use App\Models\Gost;
use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Gost::truncate();
        Hotel::truncate();

        Gost::factory(2)->create();
        //todo popuni bazu koristeci seeder
    }
}
