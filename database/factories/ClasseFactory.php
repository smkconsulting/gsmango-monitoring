<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClasseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "designation" => array_rand(["3ème 1", "3ème 2", "3ème 3", "Tle A1","Tle A2","Tle D"], 1)
        ];
    }
}
