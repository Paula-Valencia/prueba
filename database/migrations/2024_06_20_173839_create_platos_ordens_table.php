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
        Schema::create('platos_ordens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orden_id')->constrained()->onDelete('cascade');
            $table->foreignId('plato_id')->constrained()->onDelete('cascade');
            $table->interger('cantidad')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platos_ordens');
    }
};
