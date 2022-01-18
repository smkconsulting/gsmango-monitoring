<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AbsenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "etudiant_id" => rand(1,10),
            "cour_id"=> rand(1,10) ,
            "dateabsence" =>  $this -> faker->dateTimeBetween("2022-01-01", "2022-01-30")

        ];
    }
}
