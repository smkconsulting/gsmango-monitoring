<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatiereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "designation" => array_rand(["ALLEMAND", "ANGLAIS", "EPS", "ESPAGNOL","FRANCAIS","HISTOIRE-GEOGRAPHIE"], 1)
        ];
    }
}
