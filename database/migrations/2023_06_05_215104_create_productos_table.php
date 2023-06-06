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
            $table->id();
            $table->string('imagen');
            $table->string('marca');
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('precio');
            $table->unsignedBigInteger('id_categoria');
            $table->integer('cant_disponible');
            $table->string('presentacion');
            $table->date('fecha_vencimiento');
            $table->integer('restriccion');
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
