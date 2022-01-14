<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->dateTime("heuredebutcours");
            $table->dateTime("heurefincours");
            $table->string("observations");
            $table->integer("duree");
            $table->foreignId("enseignant_id")->constrained();
            $table->foreignId("classe_id")->constrained();
            $table->foreignId("annee_academique_id")->constrained();
            //$table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("absences", function(Blueprint $table){
            $table->dropForeign("enseignant_id");
            $table->dropForeign("classe_id");
            $table->dropForeign("annee_academique_id");
        });
        Schema::dropIfExists('cours');
    }
}
