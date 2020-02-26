<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraficasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graficas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre', 200)->unique();
            $table->string('modelo');
            $table->string('compania');
            $table->string('marca');
            $table->integer('precio');

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
        Schema::dropIfExists('graficas');
    }
}
