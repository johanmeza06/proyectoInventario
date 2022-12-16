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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('id_venta');
            $table->string('estado',15);
            $table->string('forma_de_pago', 15);
            $table->bigInteger('total_venta');
            $table->date('fecha_venta');
            $table->bigInteger('cliente_id')->unsigned();
            $table->string('codigo_producto');
            $table->foreign('cliente_id')->references('id_cliente')->on('clientes');
            $table->foreign('codigo_producto')->references('codigo')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
};
