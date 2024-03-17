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
        Schema::create('estacionamientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cajon');
            $table->dateTime('entrada');
            $table->dateTime('salida');
            $table->string('estado');
            $table->timestamps();

            $table->foreign('id_cajon')->references('id')->on('cajons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estacionamientos');
    }
};
