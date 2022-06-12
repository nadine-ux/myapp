<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rapport>
 */
class PosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'num' => $this->faker->word(),
            'nom' => $this->faker->word(),
            'adress' => $this->faker->word(),
             'etat' => $this->faker->word(),
        ];
    }
}
