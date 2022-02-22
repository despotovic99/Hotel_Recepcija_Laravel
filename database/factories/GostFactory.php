<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gost>
 */
class GostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'broj_dokumenta'=>$this->faker->regexify('[A-Za-z0-9]{10}'),
            'ime'=>$this->faker->firstName(),
            'prezime'=>$this->faker->lastName(),
            'datum_rodjenja'=>$this->faker->date(),
            'email'=>$this->faker->email(),
            'br_telefona'=>$this->faker->phoneNumber(),
            'pol'=>$this->faker->randomElement(['musko', 'zensko']),
            'straniGost'=>$this->faker->randomElement(['da','ne'])
        ];
    }
}
