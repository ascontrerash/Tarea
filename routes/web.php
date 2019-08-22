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
Route::get('/listar','VehiculoController@listar');

Route::get('/registrar','VehiculoController@crearvehiculo');
Route::post('/registrar','VehiculoController@registrarvehiculo','PersonaController@registrarpersona');

Route::get('/{codigo}', function ($codigo) {
    if ($codigo == 'A765'){
        return view('welcome');
    }
    else{
        return "Zona Prohibida";
    }
});


