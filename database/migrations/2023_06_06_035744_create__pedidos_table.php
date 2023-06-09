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
            $table->unsignedBigInteger('Id_usurio');
            $table->dateTime('Fecha_pedido');
            $table->string('Direccion');
            $table->unsignedBigInteger('Estado_pedido');
            $table->string('Opcion_pago');
             $table->timestamps();
            $table->foreign('Id_estado_pedido')->references('Id_estado_pedido')->on('estado_pedido');
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
