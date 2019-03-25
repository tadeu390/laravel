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
    return view('welcome');
});

Route::get('/nome/', 'MeuControladorController@getNome');
Route::get('/idade/', 'MeuControladorController@getIdade');
Route::get('/multiplicar/{n1}/{n2}', 'MeuControladorController@multiplicar');
Route::get('/getNomeById/{id}', 'MeuControladorController@getNomeById');



Route::resource('/cliente', 'ClienteController');//cria todas as rotas para os métodos do controller

Route::post('/cliente/validar', 'ClienteController@validar');