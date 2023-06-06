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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('Id_producto');
            $table->unsignedBigInteger('Id_usuario');
            $table->string('Nombre_producto');
            $table->string('Descripcion_producto');
            $table->Integer('Precio_producto');
            $table->unsignedBigInteger('Id_categoria');
            $table->Integer('Cant_disponible');
            $table->foreign("Id_usuario")
            ->references("Id_usuario")
            ->on("users")
            ->onDelete("cascade")
            ->onUpdate("cascade");
            $table->foreign("Id_categoria")
            ->references("Id_categoria")
            ->on("categorias")
            ->onDelete("cascade")
            ->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_productos');
    }
};
