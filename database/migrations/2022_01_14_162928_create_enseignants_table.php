<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->foreignId("matiere_id")->constrained();
            $table->string("nomprenoms");
            $table->string("telephone");
            $table->string("email");
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
        Schema::table("enseignants", function(Blueprint $table){
            $table->dropForeign("matiere_id");
        });
        Schema::dropIfExists('enseignants');
    }
}
