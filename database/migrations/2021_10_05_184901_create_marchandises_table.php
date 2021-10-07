<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarchandisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marchandises', function (Blueprint $table) {
            $table->id();
            $table->foreignId('connaissement_id')->constrained();
            $table->string('num_art');
            $table->string('ref_march');
            $table->string('cond');
            $table->string('incoterm');
            $table->integer('quantite');
            $table->string('marques_divers');
            $table->string('dang');
            $table->string('polluant');
            $table->integer('poids_brut');
            $table->integer('poids_net');
            $table->string('tare');
            $table->integer('vol_cont');
            $table->string('ref_cont');
            $table->integer('quantite_cont');
            $table->integer('poids_brut_cont');
            $table->integer('poids_net_cont');
            $table->string('classe_imo');
            $table->string('num_undg');
            $table->string('cond_cont');
            $table->integer('quantite_limite');
            $table->string('statut');
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
        Schema::dropIfExists('marchandises');
    }
}
