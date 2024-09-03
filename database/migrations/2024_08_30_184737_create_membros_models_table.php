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
        Schema::create('tb_membros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tb_membro_nome', 30)->nullable();
            $table->string('tb_membro_sobrenome', 50)->nullable();
            $table->string('tb_membro_data_nasc', 12)->nullable()->date();
            $table->string('tb_membro_rg', 10);
            $table->integer('tb_membro_cpf', 12)->nullable();
            $table->string('tb_membro_pai', 50);
            $table->string('tb_membro_mae', 50);
            $table->string('tb_membro_conjuge', 50);
            $table->string('tb_membro_naturalidade', 20);
            $table->boolean('tb_membro_status', 1)->nullable;
            $table->timestamps();

            //Chaves estrangeiras
            $table->integer('tb_estado_civil_id', 11)->nullable;
            $table->integer('tb_escolaridade_id', 11)->nullable;
            $table->integer('tb_profissao_id', 11)->nullable;
            $table->integer('tb_imagem_id', 11)->nullable;
            $table->integer('tb_setor_id', 11)->nullable;
            $table->integer('tb_igreja_id', 11)->nullable;
            $table->integer('tb_endereco_id', 11)->nullable;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membros_models');
    }
};
