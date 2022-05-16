<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritoDeComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_carrito_de_compras', function (Blueprint $table) {
            $table->id();
            $table->string('En la Cesta');
            $table->string('Total a Pagar');
            $table->string('Metodos de Pago');
            $table->string('Cupos');
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
        Schema::dropIfExists('_carrito_de_compras');
    }
}
