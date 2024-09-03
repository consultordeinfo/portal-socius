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
        Schema::create('tb_endereco', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tb_endereco_logradouro', 50)->nullable();
            $table->string('tb_endereco_numero', 10);
            $table->string('tb_endereco_bairro', 50)->nullable();
            $table->string('tb_endereco_cidade', 50)->nullable();
            $table->string('tb_endereco_uf', 2)->nullable();
            $table->string('tb_endereco_cep', 10)->nullable();
            $table->string('tb_endereco_pais', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endereco_models');
    }
};
