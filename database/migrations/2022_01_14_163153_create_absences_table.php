<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->date("dateabsence");
            $table->foreignId("etudiant_id")->constrained();
            $table->foreignId("cour_id")->constrained();
            $table->timestamps();
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
            $table->dropForeign("etudiant_id");
            $table->dropForeign("cour_id");
        });
        Schema::dropIfExists('absences');
    }
}
