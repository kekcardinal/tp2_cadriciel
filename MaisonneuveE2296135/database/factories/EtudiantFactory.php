<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ville;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail,
            'adresse' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'date_de_naissance' => $this->faker->date('Y-m-d', '-18 years'),
            'ville_id' => Ville::all()->random()->id
        ];
    }
}
