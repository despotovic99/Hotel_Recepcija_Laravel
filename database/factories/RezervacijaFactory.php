<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rezervacija>
 */
class RezervacijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datum_od'=>$this->faker->date(),
            'datum_do'=>$this->faker->date(),
            'cena'=>$this->faker->randomFloat(2,0,1000000)
        ];
    }
}
