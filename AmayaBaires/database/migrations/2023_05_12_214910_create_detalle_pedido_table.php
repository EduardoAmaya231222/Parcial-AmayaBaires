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
        Schema::create('detalle_pedido', function (Blueprint $table) {
            $table->unsignedInteger('id_Articulo');
            $table->unsignedInteger('id_Pedido');
            $table->integer('cantidad');
            $table->float('descuento');

            $table->foreign('id_Pedido')->references('id_Pedido')->on('pedido');
            $table->foreign('id_Articulo')->references('id_Articulo')->on('articulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_pedido');
    }
};
