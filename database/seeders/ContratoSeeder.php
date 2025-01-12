<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contrato')->insert([
            'tipo' => 'PJ',
            'ciclo' => '1',
            'ativo' => '1',
            'descricao' => 'Descritivo contrato Alpha',
        ]);
        \DB::table('contrato')->insert([
            'tipo' => 'PJ',
            'ciclo' => '1',
            'ativo' => '1',
            'descricao' => 'Descritivo contrato Beta',
        ]);
        \DB::table('contrato')->insert([
            'tipo' => 'PJ',
            'ciclo' => '1',
            'ativo' => '0',
            'descricao' => 'Descritivo contrato Gamma',
        ]);                
    }
}
