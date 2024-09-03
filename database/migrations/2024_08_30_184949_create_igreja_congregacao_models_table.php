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
        Schema::create('tb_igreja_congregacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tb_igreja_nome', 50)->nullable();
            $table->string('tb_igreja_fone_celular', 14);
            $table->string('tb_igreja_fone_fixo', 15);
            $table->string('tb_igreja_email', 25);
            $table->timestamps();

            //Chaves estrangeiras
            $table->integer('tb_endereco_id', 50)->nullable();
            $table->integer('tb_lider_id', 50)->nullable();
            $table->integer('tb_setor_id', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('igreja_congregacao_models');
    }
};
