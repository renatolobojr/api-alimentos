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

            ['nome' => 'Arroz', 'tipo'=> 'Integral', 'preparo'=> 'Cozido', 'grupo_id'=> 10,
             'calorias'=> 124, 'proteinas'=> 2.6, 'carboidratos'=> 25.8, 'gorduras'=> 1.0,
             'fibras'=> 2.7, 'sodio'=> 0.001, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
             'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Arroz', 'tipo'=> 'Integral', 'preparo'=> 'Cru', 'grupo_id'=> 10,
            'calorias'=> 360, 'proteinas'=> 7.3, 'carboidratos'=> 77.5, 'gorduras'=> 1.9,
            'fibras'=> 4.8, 'sodio'=> 0.002, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1,
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Arroz', 'tipo'=> 'Tipo 1', 'preparo'=> 'Cozido', 'grupo_id'=> 10,
            'calorias'=> 128, 'proteinas'=> 2.5, 'carboidratos'=> 28.1, 'gorduras'=> 0.2,
            'fibras'=> 1.6,'sodio'=> 0.001, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Arroz', 'tipo'=> 'Tipo 1', 'preparo'=> 'Cru', 'grupo_id'=> 10,
            'calorias'=> 358, 'proteinas'=> 7.2, 'carboidratos'=> 78.8, 'gorduras'=> 0.3,
            'fibras'=> 1.6,'sodio'=> 0.001, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Arroz', 'tipo'=> 'Tipo 2', 'preparo'=> 'Cozido', 'grupo_id'=> 10,
            'calorias'=> 130, 'proteinas'=> 2.6, 'carboidratos'=> 28.2, 'gorduras'=> 0.4,
            'fibras'=> 1.1,'sodio'=> 0.002, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Arroz', 'tipo'=> 'Tipo 2', 'preparo'=> 'Cru', 'grupo_id'=> 10,
            'calorias'=> 358, 'proteinas'=> 7.2, 'carboidratos'=> 78.9, 'gorduras'=> 0.3,
            'fibras'=> 1.7,'sodio'=> 0.001, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Aveia ', 'tipo'=> 'Flocos', 'preparo'=> 'Cru', 'grupo_id'=> 10,
            'calorias'=> 394, 'proteinas'=> 13.9, 'carboidratos'=> 66.6, 'gorduras'=> 8.5,
            'fibras'=> 9.1,'sodio'=> 0.005, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Biscoito', 'tipo'=> 'Doce', 'preparo'=> 'Maisena', 'grupo_id'=> 10,
            'calorias'=> 443, 'proteinas'=> 8.1, 'carboidratos'=> 75.2, 'gorduras'=> 12.0,
            'fibras'=> 2.1,'sodio'=> 0.352, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Biscoito', 'tipo'=> 'Doce', 'preparo'=> 'Recheado com chocolate', 'grupo_id'=> 10,
            'calorias'=> 472, 'proteinas'=> 6.4, 'carboidratos'=> 70.5, 'gorduras'=> 19.6,
            'fibras'=> 3.0,'sodio'=> 0.239, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Biscoito', 'tipo'=> 'Doce', 'preparo'=> 'Recheado com Morango', 'grupo_id'=> 10,
            'calorias'=> 471, 'proteinas'=> 5.7, 'carboidratos'=> 71.0, 'gorduras'=> 19.6,
            'fibras'=> 1.5,'sodio'=> 0.23, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Biscoito', 'tipo'=> 'Doce, Wafer', 'preparo'=> 'Recheado de chocolate', 'grupo_id'=> 10,
            'calorias'=> 502, 'proteinas'=> 5.6, 'carboidratos'=> 67.5, 'gorduras'=> 24.7,
            'fibras'=> 1.8,'sodio'=> 0.137, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Biscoito', 'tipo'=> 'Doce Wafer', 'preparo'=> ' Recheado de Morango', 'grupo_id'=> 10,
            'calorias'=> 513, 'proteinas'=> 4.5, 'carboidratos'=> 67.4, 'gorduras'=> 26.4,
            'fibras'=> 0.8,'sodio'=> 0.12, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Biscoito', 'tipo'=> 'Salgado', 'preparo'=> 'Cream Cracker', 'grupo_id'=> 10,
            'calorias'=> 432, 'proteinas'=> 10.1, 'carboidratos'=> 68.7, 'gorduras'=> 14.4,
            'fibras'=> 2.5,'sodio'=> 0.854, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Bolo', 'tipo'=> 'Doce', 'preparo'=> 'Mistura para', 'grupo_id'=> 10,
            'calorias'=> 419, 'proteinas'=> 6.2, 'carboidratos'=> 84.7, 'gorduras'=> 6.1,
            'fibras'=> 1.7,'sodio'=> 0.463, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Bolo', 'tipo'=> 'Pronto', 'preparo'=> 'Aipim', 'grupo_id'=> 10,
            'calorias'=> 324, 'proteinas'=> 4.4, 'carboidratos'=> 47.9, 'gorduras'=> 12.7,
            'fibras'=> 0.7,'sodio'=> 0.111, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Bolo', 'tipo'=> 'Pronto', 'preparo'=> 'Chocolate', 'grupo_id'=> 10,
            'calorias'=> 410, 'proteinas'=> 6.2, 'carboidratos'=> 54.7, 'gorduras'=> 18.5,
            'fibras'=> 1.4,'sodio'=> 0.283 , 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Bolo', 'tipo'=> 'Pronto', 'preparo'=> 'Coco', 'grupo_id'=> 10,
            'calorias'=> 333, 'proteinas'=> 5.7, 'carboidratos'=> 52.3, 'gorduras'=> 11.3,
            'fibras'=> 1.1,'sodio'=> 0.23, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Bolo', 'tipo'=> 'Pronto', 'preparo'=> 'Milho', 'grupo_id'=> 10,
            'calorias'=> 311, 'proteinas'=> 4.8, 'carboidratos'=> 45.1, 'gorduras'=> 12.4,
            'fibras'=> 0.7,'sodio'=> 0,19, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Canjica', 'tipo'=> 'Branca', 'preparo'=> 'Crua', 'grupo_id'=> 10,
            'calorias'=> 358, 'proteinas'=> 7.2, 'carboidratos'=> 78.1, 'gorduras'=> 1.0,
            'fibras'=> 5.5,'sodio'=> 0.134, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Canjica', 'tipo'=> 'Doce', 'preparo'=> 'Com leite integral', 'grupo_id'=> 10,
            'calorias'=> 112, 'proteinas'=> 2.4, 'carboidratos'=> 23.6, 'gorduras'=> 1.2,
            'fibras'=> 1.2,'sodio'=> 0.001, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Cereais', 'tipo'=> 'milho', 'preparo'=> 'Flocos Com Sal', 'grupo_id'=> 10,
            'calorias'=> 112, 'proteinas'=> 2.4, 'carboidratos'=> 23.6, 'gorduras'=> 1.2,
            'fibras'=> 1.2,'sodio'=> 0.001, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

            ['nome' => 'Cereais', 'tipo'=> 'milho', 'preparo'=> 'Flocos Sem Sal', 'grupo_id'=> 10,
            'calorias'=> 112, 'proteinas'=> 2.4, 'carboidratos'=> 23.6, 'gorduras'=> 1.2,
            'fibras'=> 1.2,'sodio'=> 0.001, 'porcao'=> 100, 'medida'=> 1, 'fator'=> 1, 
            'fonte_id'=> 2, 'created_at'=> now(), 'updated_at'=> now()],

        ]);
    }
}
