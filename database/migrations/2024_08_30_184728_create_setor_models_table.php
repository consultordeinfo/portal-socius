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
        Schema::create('tb_setor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tb_setor_nome', 50)->nullable();
            $table->string('tb_setor_fone_fixo', 15)->nullable();
            $table->string('tb_setor_fone_celular', 15)->nullable();
            $table->timestamps();

            //Caves estrangeiras
            $table->integer('tb_endereco_id', 11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setor_models');
    }
};
