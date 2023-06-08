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
        Schema::create('detalles_pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_pedido');
            $table->unsignedBigInteger('Id_producto');
            $table->Integer('Cantidad_producto_pedido');
            $table->Integer('Precio_unitario');
            $table->timestamps();
            $table->foreign('Id_pedido')->references('id')->on('pedidos');
            $table->foreign('Id_producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_detalles_pedidos');
    }
};
