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
<<<<<<< HEAD:database/migrations/2023_06_06_182236_create__categoria_table.php
        Schema::create('categoria', function (Blueprint $table) {
=======
        Schema::create('categorias', function (Blueprint $table) {
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f:database/migrations/2023_06_05_182043_create__categorias_table.php
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_categoria');
    }
};
