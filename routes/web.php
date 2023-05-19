<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios/novo', 'App\Http\Controllers\UsuarioController@create'); /* Metodo Create*/
Route::post('/usuarios/novo', 'App\Http\Controllers\UsuarioController@store')->name('cadastrar_usuario'); /* Metodo Create*/
Route::get('/usuarios/ver/{id}', 'App\Http\Controllers\UsuarioController@show'); /* Metodo Read */
Route::get('/usuarios/editar/{id}','App\Http\Controllers\UsuarioController@edit'); //Metodo Update
Route::post('/usuarios/editar/{id}', 'App\Http\Controllers\UsuarioController@update')->name('alterar_usuario'); 
Route::get('/usuarios/excluir/{id}','App\Http\Controllers\UsuarioController@delete'); // Metodo Delete
Route::post('/usuarios/excluir/{id}', 'App\Http\Controllers\UsuarioController@destroy')->name('excluir_usuario'); 