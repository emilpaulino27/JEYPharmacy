<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle__carrito', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_carrito_compra');
            $table->unsignedBigInteger('Id_producto');
            $table->integer('Cantidad_producto');
            $table->integer('Precio_unitario');
            $table->timestamps();
            $table->foreign('Id_carrito_compra')->references('id')->on('carrito_compras');
            $table->foreign('Id_producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_detalle__carrito');
    }
};
