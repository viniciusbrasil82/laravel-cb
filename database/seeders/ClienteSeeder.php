<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cliente')->insert([
            'nome' => 'Primo Cliente',
            'documento' => '1',
            'endereco' => 'Rua Do Nada',
            'contato' => 'Enzo Lorenzzo',
            'estrangeiro' => '1',
            'status' => '1',   
            'contrato_id' => '1',                     
        ]);

        \DB::table('cliente')->insert([
            'nome' => 'Seco Cliente',
            'documento' => '1',
            'endereco' => 'Rua Do Nada',
            'contato' => 'Enzo Lorenzzo',
            'estrangeiro' => '1',
            'status' => '1',   
            'contrato_id' => '2',                     
        ]);

        \DB::table('cliente')->insert([
            'nome' => 'Terco Cliente',
            'documento' => '1',
            'endereco' => 'Rua Do Nada',
            'contato' => 'Enzo Lorenzzo',
            'estrangeiro' => '1',
            'status' => '1',   
            'contrato_id' => '3',                     
        ]);        

    }
}
