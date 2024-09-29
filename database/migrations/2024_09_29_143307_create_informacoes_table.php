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
        Schema::create('informacoes', function (Blueprint $table) {
            $table->id();
            $table->float('pesoatual', 20);
            $table->float('idade', 20);
            $table->float('altura', 20);
            $table->float('metapeso', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacoes');
    }
};
