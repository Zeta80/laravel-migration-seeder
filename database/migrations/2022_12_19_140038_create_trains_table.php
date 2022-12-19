<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 30);
            $table->string('stazione_partenza', 100);
            $table->string('stazione_arrivo', 100);
            $table->date('giorno_partenza');
            $table->time('orario_partenza');
            $table->date('giorno_arrivo');
            $table->time('orario_arrivo');
            $table->string('codice_treno', 50);
            $table->smallInteger('numero_carrozze')->unsigned();
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
        Schema::dropIfExists('trains');
    }
};
