<?php

namespace Database\Factories;

use App\Models\AnneeAcademique;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnneeAcademiqueFactory extends Factory
{

    protected $model = AnneeAcademique::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'designation' => array_rand(['2021-2022'], 1)
        ];
    }
}
