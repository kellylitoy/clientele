<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnaissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connaissements', function (Blueprint $table) {
            $table->id();
            $table->string('trans');
            $table->string('nom_charg');
            $table->string('adr_charg');
            $table->string('nom_clt');
            $table->string('adr_clt');
            $table->string('nom_not');
            $table->string('adr_not');
            $table->string('ville_org');
            $table->string('port_charg');
            $table->string('port_dechrg');
            $table->string('ville_dest');
            $table->string('type_fret');
            $table->integer('montant_fret');
            $table->string('devise_fret');
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
        Schema::dropIfExists('connaissements');
    }
}
