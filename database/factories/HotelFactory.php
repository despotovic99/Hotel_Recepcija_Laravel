<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'naziv'=>$this->faker->randomElement(['Hotel','Motel','Prenociste']).''.$this->faker->randomNumber(),
            'adresa'=>$this->faker->address(),
            'broj_zvezdica'=>$this->faker->randomElement(['0','1','2','3','4','5'])
        ];
    }
}
