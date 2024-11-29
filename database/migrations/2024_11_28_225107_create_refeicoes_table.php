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
        Schema::create('refeicoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('informacoes_id');
            $table->foreign('informacoes_id')
                    ->references('id')
                    ->on("informacoes")
                    ->onDelete("restrict");
            $table->string("tipo");
            $table->string("descricao");
            $table->decimal("quantidade", 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refeicoes');
    }
};
