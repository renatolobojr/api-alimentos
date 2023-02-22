<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alimentos')->insert([
            'nome' => 'banana',
            'tipo'=> 'prata',
            'preparo'=> 'cozida',
            'grupo_id'=> 10,
            'calorias'=> 78,
            'proteinas'=> 45,
            'carboidratos'=> 67,
            'gorduras'=> 0,
            'sodio'=> 0.345,
            'porcao'=> 100,
            'medida'=> 1,
            'fator_conversor'=> 1,
            'fonte_id'=> 2
        ]);
    }
}
