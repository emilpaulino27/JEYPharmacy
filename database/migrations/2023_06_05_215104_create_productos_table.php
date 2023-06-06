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
            $table->string('imagen');
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('precio');
            $table->unsignedBigInteger('Id_categoria');
            $table->integer('cant_disponible');
            $table->timestamps();
            $table->foreign('Id_categoria')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
