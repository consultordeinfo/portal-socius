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
        Schema::create('tb_agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tb_agenda_replicacao', 30)->nullable();
            $table->string('tb_agenda_data')->date();
            $table->string('tb_agenda_hora_inicial')->time();
            $table->string('tb_agenda_hora_final')->time();
            $table->string('tb_agenda_titulo', 50)->nullable();
            $table->string('tb_agenda_descricao', 100);
            $table->string('tb_igreja_nome', 50)->nullable();
            $table->string('tb_lider_nome', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda_models');
    }
};
