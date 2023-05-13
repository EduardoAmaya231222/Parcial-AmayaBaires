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
        Schema::create('pedido', function (Blueprint $table) {
            $table->increments('id_Pedido');
            $table->date('fechaPedido');
            $table->date('fechaEntrega');
            $table->string('observaciones', 150);
            $table->unsignedInteger('id_Cliente');

            $table->foreign('id_Cliente')->references('id_Cliente')->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedido', function (Blueprint $table) {
            $table->dropForeign(['id_Cliente']);
        });

        Schema::dropIfExists('pedido');
    }
};
