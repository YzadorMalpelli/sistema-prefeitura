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
        Schema::create('cnhs', function (Blueprint $table) {
             $table->id();
            $table->string('numero');
            $table->string('categoria');
            $table->date('validade');
            $table->string('orgao_emissor');

            $table->foreignId('funciorario_id')
                ->unique()
                ->constrained('funcionarios')
                ->onDelete('cascade');


            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cnhs');
    }
};
