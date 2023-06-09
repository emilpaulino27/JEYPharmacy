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
        Schema::create('estado_pedido', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('Descripcion_pedido');
=======
            $table->string('descripcion');
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_estado_pedido');
    }
};
