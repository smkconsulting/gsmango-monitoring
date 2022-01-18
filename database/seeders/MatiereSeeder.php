<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matieres')->insert([
            ['designation' => 'ALLEMAND'],
            ['designation' =>'ANGLAIS'],
            ['designation' =>'EPS'],
            ['designation' =>'ESPAGNOL'],
            ['designation' =>'FRANCAIS'],
            ['designation' =>'HISTOIRE-GEOGRAPHIE'],
            ['designation' =>'MATHEMATIQUE'],
            ['designation' =>'PHILOSOPHIE'],
            ['designation' =>'PHYSIQUE-CHIMIE'],
            ['designation' =>'SVT']
        ]);
    }
}
