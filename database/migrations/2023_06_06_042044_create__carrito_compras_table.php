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
        Schema::create('carrito_compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_usuario');
            $table->dateTime('Fecha');
            $table->string('Estado_carrito')->default('Activo');
            $table->timestamps();
            $table->foreign('Id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_carrito_compras');
    }
};
