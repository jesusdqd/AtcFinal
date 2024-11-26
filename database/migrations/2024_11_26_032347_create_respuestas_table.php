<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   // database/migrations/xxxx_xx_xx_create_respuestas_table.php
public function up()
{
    Schema::create('respuestas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pregunta_id')->constrained();
        $table->string('contenido');
        $table->boolean('es_correcta')->default(false);
        $table->timestamps();
    });
}
};
