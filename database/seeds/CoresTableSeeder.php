<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cores')->insert([
            'cor' => 'preto'
        ]);

        DB::table('cores')->insert([
            'cor' => 'prata'
        ]);

        DB::table('cores')->insert([
            'cor' => 'branco'
        ]);
    }
}
