<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EnseignantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "matiere_id" => rand(1,10),
            "nomprenoms"=> $this -> faker->name() ,
            "telephone" => $this -> faker->phoneNumber,
            "email" => $this -> faker->email
        ];
    }
}
