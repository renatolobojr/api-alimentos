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
        Schema::create('alimentos', function (Blueprint $table) {
            $table->id();
            $table->string(column:'nome');
            $table->string(column:'tipo');
            $table->string(column:'preparo');
            $table->foreignId(column:'grupo_id');
            $table->integer(column:'calorias');
            $table->float(column:'proteinas');
            $table->float(column:'carboidratos');
            $table->float(column:'gorduras');
            $table->float(column:'fibras');
            $table->float(column:'sodio');
            $table->integer(column:'porcao');
            $table->string(column:'medida');
            $table->float(column:'fator');
            $table->foreignId(column:'fonte_id');
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
        Schema::dropIfExists('alimentos');
    }
};
