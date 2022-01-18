<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnneeAcademiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annee_academiques')->insert([
            ['designation' => '2021-2022'] //,
            // ['designation' =>'2022-2023'],
            // ['designation' =>'2023-2024']
        ]);

    }
}
