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

Use App\Projeto;
Use App\Desenvolvedor;
Use App\Alocacao;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/desenvolvedor_projeto', function(){
    $dev = Desenvolvedor::with('projetos')->get();
    return $dev->toJson();
});

Route::get('/projeto_desenvolvedor', function(){
    $proj = Projeto::with('desenvolvedores')->get();
    return $proj->toJson();
});

Route::get('/alocar_dev', function(){
    $proj = Projeto::find(4);
    //primeiro parametro é a id do desenvolvedor, o segundo parametro são os campos do pivot
    $proj->desenvolvedores()->attach(1, ['horas_semanais' => 3]);
    echo 1;
});

Route::get('/desalocar_dev', function(){
    $proj = Projeto::find(4);
    //primeiro parametro é a id do desenvolvedor, o segundo parametro são os campos do pivot
    $proj->desenvolvedores()->detach(1);
    echo 1;
});