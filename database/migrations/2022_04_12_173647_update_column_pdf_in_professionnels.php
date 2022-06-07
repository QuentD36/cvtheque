<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnPdfInProfessionnels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professionnels', function (Blueprint $table) {
            $table->string('pdf', 191)->nullable()
                ->comment('Chemin d\'accès au CV en pdf du professionnel')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professionnels', function (Blueprint $table) {
            $table->string('pdf', 191)->after('observation')
                            ->comment('Chemin d\'accès au CV en pdf du professionnel');
        });
    }
}
