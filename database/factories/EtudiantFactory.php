<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            "classe_id" => rand(1,6),
            "nomprenoms"=> $this -> faker->name() ,
            "telephone_parent" => $this -> faker->phoneNumber
        ];
    }
}
