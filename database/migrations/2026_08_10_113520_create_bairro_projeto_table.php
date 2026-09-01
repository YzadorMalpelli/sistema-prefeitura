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
        Schema::create('bairro_projeto', function (Blueprint $table) {
            $table->id();

            $table->foreignID('bairro_id')
                ->constrained('bairros')
                ->onDelete('cascade');

            $table->foreignID('projeto_id')
                ->constrained('projetos')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bairro_projeto');
    }
};
