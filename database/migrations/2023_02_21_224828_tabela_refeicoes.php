<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refeicoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'receita_id');
            $table->foreignId(column:'dieta_id');
            $table->foreignId(column:'tipo_refeicao_id');
            $table->time(column:'horario',precision:2);
            $table->foreignId(column:'frequencia_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refeicoes');
    }
};
