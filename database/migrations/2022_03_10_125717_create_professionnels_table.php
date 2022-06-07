<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionnels', function (Blueprint $table) {
            $table->id()->comment('Identifiant du professionnel');
            $table->string('prenom', 25)->comment('Prénom du professionnel');
            $table->string('nom', 40)->comment('Nom du professionnel');
            $table->string('cp', 5)->comment('Code postal du professionnel');
            $table->string('ville', 35)->comment('Ville du professionnel');
            $table->string('telephone', 14)->comment('Téléphone du professionnel');
            $table->string('email', 191)->unique()->comment('E-mail du professionnel');
            $table->date('naissance')->comment('Date de naissance du professionnel');
            $table->boolean('formation')->default(0)->comment('Activité de formation du professionnel déjà effectué ? Oui ou non');
            $table->set('domaine', ['S', 'R', 'D'])->comment('Domaine d\'activité : Système, réseau ou développement');
            $table->string('source', 191)->nullable()->comment('Source profil (Réseau, organisme partenaire ...)');
            $table->text('observation')->nullable()->comment('Commentaires / Observations');
            $table->timestamps();
            $table->unsignedBigInteger('metier_id');
            $table->foreign('metier_id')->references('id')->on('metiers')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionnels');
    }
}
