<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpcionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opciones')->insert([
            'pregunta_id' => 1,
            'opcion' => 'Verdadero',
        ]);
        DB::table('opciones')->insert([
            'pregunta_id' => 1,
            'opcion' => 'Falso',
        ]);
    }
}
