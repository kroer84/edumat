<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temas')->insert([
            'title' => 'Conjuntos',
            'body' => '',
        ]);
    }
}
