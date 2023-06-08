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
            $table->integer('Subtotal');
            $table->float('itbis');
            $table->float('Total');
            $table->string('Titular_tarjeta');
            $table->String('Numero_tarjeta');
            $table->integer('CVV');
            $table->string('Fecha_expiracion');
            $table->float('Monto_efectivo');
            $table->float('Cambio');
            $table->text('Comentarios')->nullable();
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
        Schema::dropIfExists('pedidos');
    }
};
