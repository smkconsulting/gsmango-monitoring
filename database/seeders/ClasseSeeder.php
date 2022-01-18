<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            ['designation' => '3ème 1'],
            ['designation' =>'3ème 2'],
            ['designation' =>'3ème 3'],
            ['designation' => 'Tle A1'],
            ['designation' =>'Tle A2'],
            ['designation' =>'Tle D']
        ]);
    }
}
