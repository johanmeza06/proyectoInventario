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
        Schema::create('productos', function (Blueprint $table) {
            $table->string('codigo',130);
            $table->string('nombre_producto',50);
            $table->integer('cantidad');
            $table->date('fecha_vencimiento');
            $table->integer('precio_compra');
            $table->integer('precio_venta');
            $table->primary('codigo');
            $table->bigInteger('categoria')->unsigned();      
            $table->foreign('categoria')->references('id_categoria')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
