<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TemasTableSeeder::class);
        $this->call(cuestionariosTableSeeder::class);
        $this->call(PreguntasTableSeeder::class);
        $this->call(OpcionesTableSeeder::class);
    }
}
