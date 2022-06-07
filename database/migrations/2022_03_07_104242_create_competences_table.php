<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competences', function (Blueprint $table) {
            $table->id()->comment('Identifiant d\'une compétence');
            $table->string('intitule', 120)->comment('Nom de la compétence');
            $table->text('description')->comment('Court descriptif de la compétence');
            // timestamps() est une méthode créant deux rubriques
            // created_at -> date de création
            // updated_at -> date de modification
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competences');
    }
}
