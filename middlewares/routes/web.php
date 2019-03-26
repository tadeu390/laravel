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

Route::get('/usuarios', 'UsuarioController@index')->middleware('primeiro', 'segundo');

//passando parâmetro para o middleware
Route::get('/terceiro', function(){
    return "Passou pelo terceiro middleware";
})->middleware('terceiro:joao,20');
