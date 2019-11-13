<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Miguel Jiménez González',
            'matricula' => 201451183,
            'email' => 'kroer17@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'Josadan Salvador Flores Vázquez',
            'matricula' => 201411111,
            'email' => 'josedan@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'Hannia Hernández Chávez',
            'matricula' => 201422222,
            'email' => 'hannia@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
