<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Resources\Json\Resource;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Conjuntos', 'HomeController@Conjuntos')->name('Conjuntos');

Route::get('/Conjuntos/Habilidad', 'HomeController@Habilidad_Conjuntos')->name('Habilidad_Conjuntos');

Route::Resource('/cuestionario','CuestionarioController');

Route::Resource('/preguntas','PreguntasController');
