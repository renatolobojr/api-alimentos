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
            $table->integer(column:'calorias');
            $table->integer(column:'proteinas');
            $table->integer(column:'carboidratos');
            $table->integer(column:'gorduras');
            $table->float(column:'sodio');
            $table->integer(column:'porcao');
            $table->string(column:'medida');
            $table->float(column:'fator_conversor');
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
