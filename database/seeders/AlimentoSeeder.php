<?php

namespace Database\Seeders;

use DateTime;
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
            
            ['nome' => 'banana', 'tipo'=> 'ouro', 'preparo'=> 'cozida', 'grupo_id'=> 10,
            'calorias'=> 78, 'proteinas'=> 45, 'carboidratos'=> 67, 'gorduras'=> 0,
            'sodio'=> 0.345, 'porcao'=> 100, 'medida'=> 1, 'fator_conversor'=> 1,
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'maca', 'tipo'=> 'gala', 'preparo'=> 'crua', 'grupo_id'=> 10,
            'calorias'=> 78, 'proteinas'=> 45, 'carboidratos'=> 67, 'gorduras'=> 0,
            'sodio'=> 0.345, 'porcao'=> 100, 'medida'=> 1, 'fator_conversor'=> 1,
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['mamao', 'papaya', 'com casca', 10, 99, 25, 45, 0, 0.123, 100, 1, 1, 2, now(), now()]
        ]);
    }
}
