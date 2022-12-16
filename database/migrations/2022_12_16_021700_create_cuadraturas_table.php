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
        Schema::create('cuadraturas', function (Blueprint $table) {
            $table->id('id_cuadratura');
            $table->bigInteger('ganancias');
            $table->bigInteger('perdidas');
            $table->bigInteger('ventas_id')->unsigned();
            $table->foreign('ventas_id')->references('id_venta')->on('ventas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuadraturas');
    }
};
