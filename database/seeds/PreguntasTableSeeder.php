<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('preguntas')->insert([
            'cuestionario_id' => 1,
            'pregunta' => 'La característica principal de un conjunto es estar bien definido?',
            'res_user' => 1,
            'res_true' => 1,
        ]);
        //2
        DB::table('preguntas')->insert([
            'cuestionario_id' => 1,
            'pregunta' => 'Los objetos que forman un conjunto son llamados miembros',
            'res_user' => 1,
            'res_true' => 1,
        ]);
        //3
        DB::table('preguntas')->insert([
            'cuestionario_id' => 1,
            'pregunta' => 'La dispersión de objetos se llama conjunto.',
            'res_user' => 1,
            'res_true' => 0,
        ]);
        //4
        DB::table('preguntas')->insert([
            'cuestionario_id' => 1,
            'pregunta' => 'El detallar todos los elementos de un conjunto entre llaves se denomina forma tabular',
            'res_user' => 1,
            'res_true' => 1,
        ]);
        //5
        DB::table('preguntas')->insert([
            'cuestionario_id' => 1,
            'pregunta' => 'El conjunto de las vocales es: { a, b, c, d, e }',
            'res_user' => 1,
            'res_true' => 0,
        ]);
        //6
        DB::table('preguntas')->insert([
            'cuestionario_id' => 1,
            'pregunta' => 'El conjunto de los colores primarios es {rojo, azul , verde}',
            'res_user' => 1,
            'res_true' => 1,
        ]);
        //7
        DB::table('preguntas')->insert([
            'cuestionario_id' => 1,
            'pregunta' => 'El conjunto de los días de la semana es: { lunes, martes, miércoles, jueves, viernes, sábado,domingo }',
            'res_user' => 1,
            'res_true' => 1,
        ]);
        //8
        DB::table('preguntas')->insert([
            'cuestionario_id' => 1,
            'pregunta' => 'El conjunto de los meses del año tiene 12 elementos.',
            'res_user' => 1,
            'res_true' => 1,
        ]);
        //9
        DB::table('preguntas')->insert([
            'cuestionario_id' => 1,
            'pregunta' => 'Los conjuntos { 2, 4, 6 } y { 6, 2, 4 } son iguales',
            'res_user' => 1,
            'res_true' => 1,
        ]);
        //10
        DB::table('preguntas')->insert([
            'cuestionario_id' => 1,
            'pregunta' => 'El conjunto de cada uno de los números que aparecen en las cifras 5, 578 y 587 es { 5, 7, 8 }',
            'res_user' => 1,
            'res_true' => 1,
        ]);
        //11
        DB::table('preguntas')->insert([
            'cuestionario_id' => 1,
            'pregunta' => 'El conjunto de cada una de las letras de la palabra casa es { a, c, s }',
            'res_user' => 1,
            'res_true' => 1,
        ]);
    }
}
