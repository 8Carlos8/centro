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
        Schema::create('carteleras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_evento');
            $table->unsignedBigInteger('id_sala');
            $table->integer('estado');
            $table->dateTime('inicio');
            $table->dateTime('fin');
            $table->timestamps();

            $table->foreign('id_evento')->references('id')->on('eventos')->onDelete('cascade');
            $table->foreign('id_sala')->references('id')->on('salas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carteleras');
    }
};
