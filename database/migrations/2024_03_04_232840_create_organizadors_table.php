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
        Schema::create('organizadors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_persona');
            $table->integer('estado');
            $table->string('razonSoc');
            $table->string('direccion');
            $table->timestamps();

            $table->foreign('id_persona')->references('id')->on('personas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizadors');
    }
};
