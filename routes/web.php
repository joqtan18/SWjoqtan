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

Route::get('/', function () {
    return view('plantilla.plantilla');
});
Route::resource('documento','DocumentoController');
Route::resource('empleado','EmpleadoController');
Route::resource('tramite','TramiteController');


//Ruta para consultar el DNI
Route::get('/consulta', 'PruebaController@index')->name('consulta');
Route::get('/consultardni', 'PruebaController@buscarDni')->name('consultar.reniec');