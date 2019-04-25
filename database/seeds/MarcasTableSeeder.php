<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            'marca' => 'fiat'
        ]);

        DB::table('marcas')->insert([
            'marca' => 'volkswagen'
        ]);

        DB::table('marcas')->insert([
            'marca' => 'hyundai'
        ]);
    }
}
