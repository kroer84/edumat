<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cuestionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cuestionarios')->insert([
            'user_id' => 1,
            'tema_id' => 1,
            'calif' => 10,
        ]);
        DB::table('cuestionarios')->insert([
            'user_id' => 2,
            'tema_id' => 1,
            'calif' => 9,
        ]);
        DB::table('cuestionarios')->insert([
            'user_id' => 3,
            'tema_id' => 1,
            'calif' => 8,
        ]);
    }
}
