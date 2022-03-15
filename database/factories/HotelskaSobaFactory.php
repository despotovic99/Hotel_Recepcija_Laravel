<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HotelskaSoba>
 */
class HotelskaSobaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sprat=$this->faker->numberBetween(1,9);
        return [
            'broj'=>$sprat.''.$this->faker->unique()->numerify('##'),
            'sprat'=>$sprat,
            'broj_kreveta'=>$this->faker->numberBetween(1,6),
            'terasa'=>$this->faker->randomElement([true,false]),
            'kuhinja'=>$this->faker->randomElement([true,false]),
            'minibar'=>$this->faker->randomElement([true,false]),
        ];
    }
}
