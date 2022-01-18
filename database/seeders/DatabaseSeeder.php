<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use App\Models\Enseignant;
use App\Models\Cour;
use App\Models\Absence;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AnneeAcademiqueSeeder::class);
        $this->call(ClasseSeeder::class);
        $this->call(MatiereSeeder::class);

        Etudiant::factory(10)->create();
        Enseignant::factory(10)->create();
        Cour::factory(10)->create();
        Absence::factory(10)->create();
    }
}
