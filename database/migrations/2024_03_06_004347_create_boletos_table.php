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
        Schema::create('boletos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_cartelera');
            $table->unsignedBigInteger('id_cajon');
            $table->integer('noBoletos');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_cartelera')->references('id')->on('carteleras')->onDelete('cascade');
            $table->foreign('id_cajon')->references('id')->on('cajons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boletos');
    }
};
