<?php

use App\Models\Api\Veiculo;
use Illuminate\Database\Seeder;

class VeiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Veiculo::create([
            'modelo' => 'gol g4',
            'chassi' => '123sdt4er14d3q75t',
            'ano_fabricacao' => '2010',
            'ano_modelo' => '2011',
            'codigo_fipe' => 3548741,
            'valor' => 1500000,
            'id_cor' => 1,
            'id_marca' => 2
        ]);

        Veiculo::create([
            'modelo' => 'polo sedam',
            'chassi' => 'sg1548237910sh7nq',
            'ano_fabricacao' => '2015',
            'ano_modelo' => '2015',
            'codigo_fipe' => 3265477,
            'valor' => 3200000,
            'id_cor' => 3,
            'id_marca' => 3
        ]);
    }
}
