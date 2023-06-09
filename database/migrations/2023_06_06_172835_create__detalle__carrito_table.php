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
<<<<<<< HEAD
            $table->foreign('Id_carrito_compra')->references('Id_carrito_compra')->on('carrito_compras');
=======
            $table->foreign('Id_carrito_compra')->references('id')->on('carrito_compras');
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f
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
