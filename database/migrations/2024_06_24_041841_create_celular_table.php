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
        Schema::create('celulars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('marca', 50);
            $table->string('modelo', 50);
            $table->string('cor', 20);
            $table->integer('memoriaRAM');
            $table->string('sistema', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('celulars');
    }
};
