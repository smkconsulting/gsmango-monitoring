<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "heuredebutcours" => $this -> faker-> dateTimeBetween("2022-01-01", "2022-01-30") ,
            "heurefincours" => $this -> faker->dateTimeBetween("2022-01-01", "2022-01-30") ,
            "observations" => $this -> faker->text(128) ,
            "duree" => rand(1,3),
            "enseignant_id" => rand(1,10),
            "classe_id" => rand(1,6),
            "annee_academique_id" => rand(1,1),
            // "matiere_id" => rand(1,10),
            // "nomprenoms"=> $this -> faker->name() ,
            // "telephone" => $this -> faker->phoneNumber,
            // "email" => $this -> faker->email

        ];
    }
}
