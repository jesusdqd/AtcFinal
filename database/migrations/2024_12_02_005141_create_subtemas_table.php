<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('subtemas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del subtema
            $table->foreignId('tema_id')->constrained()->onDelete('cascade'); // Relación con el tema
            $table->text('descripcion')->nullable(); // Descripción del subtema
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subtemas');
    }
};
