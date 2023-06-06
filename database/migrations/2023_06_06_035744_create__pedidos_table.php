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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->dateTime('Fecha_pedido');
            $table->string('Direccion');
            $table->unsignedBigInteger('Estado_pedido');
            $table->string('Opcion_pago');
             $table->timestamps();
             $table->foreign('Estado_pedido')->references('id')->on('estado_pedido');
             $table->foreign('id_usuario')->references('id')->on('users');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_pedidos');
    }
};
