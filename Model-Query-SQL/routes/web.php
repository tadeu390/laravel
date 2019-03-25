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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});


//busca no banco
Route::get('/categorias', function(){
    $cats = DB::table('categorias')->get();

    foreach($cats as $item)
    {
        echo "id: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
    }

    ///retornar apenas um campo específico do model

    echo"<hr>";

    $nomes = DB::table('categorias')->pluck('nome');

    foreach($nomes as $nome)
    {
        echo "nome: ".$nome."<br />";
    }

    echo "<hr>";
    $cats = DB::table('categorias')->where('id', 1)->get();
    foreach($cats as $item)
    {
        echo "id: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
    }

    echo "<hr>";
    $cat = DB::table('categorias')->where('id', 1)->first();
    echo "id: ".$cat->id."<br />";
    echo "nome: ".$cat->nome."<br />";

    echo "<hr> com like<br />";
    $cats = DB::table('categorias')->where('nome','like', '%e%')->get();
    foreach($cats as $item)
    {
        echo "id: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
    }

    echo "<hr> sentenas lógicas (OR)<br />";
    $cats = DB::table('categorias')->where('id', 1)->orWhere('id', 2)->get();
    foreach($cats as $item)
    {
        echo "id: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
    }

    echo "<hr> sentenas lógicas (AND)<br />";
    $cats = DB::table('categorias')->where([
        ['id','1'],
        ['nome','Roupas']
    ])->get();
    foreach($cats as $item)
    {
        echo "id: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
    }

    echo "<hr> intervalos<br />";
    $cats = DB::table('categorias')->whereBetween('id', [1,2])->get();
    foreach($cats as $item)
    {
        echo "id: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
    }

    echo "<hr> fora do intervalo<br />";
    $cats = DB::table('categorias')->whereNotBetween('id', [1,2])->get();
    foreach($cats as $item)
    {
        echo "id: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
    }

    echo "<hr> where com in<br />";
    $cats = DB::table('categorias')->whereIn('id', [1,2])->get();
    foreach($cats as $item)
    {
        echo "id: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
    }

    echo "<hr> where com in (negação)<br />";
    $cats = DB::table('categorias')->whereNotIn('id', [1,2])->get();
    foreach($cats as $item)
    {
        echo "id: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
    }

    echo "<hr> ordenando por nome<br />";
    $cats = DB::table('categorias')->orderBy('nome')->get();
    foreach($cats as $item)
    {
        echo "id: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
    }

    echo "<hr> ordenando por nome decrescente<br />";
    $cats = DB::table('categorias')->orderByDesc('nome')->get();
    foreach($cats as $item)
    {
        echo "id: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
    }
});

//inserindo no banco
Route::get('/categorias/create', function(){
   /* DB::table('categorias')->insert(
        ['nome' => 'Teste']
    );*/

    //retorna o id após a inserção no banco
    $id = DB::table('categorias')->insertGetId(
        ['nome' => 'Teste']
    );
    echo $id;
});

//atualizando no banco
Route::get('/categorias/update', function(){
    $cat = DB::table('categorias')->where('id', 1)->first();
    echo  $cat->nome;
    DB::table('categorias')->where('id', 1)->update(['nome' => 'Roupas infantis']);
    $cat = DB::table('categorias')->where('id', 1)->first();
    echo"<br />depois de atualizar<br />";
    echo  $cat->nome;
 });

 //removendo no banco
Route::get('/categorias/destroy', function(){
    $cat = DB::table('categorias')->where('id', 8)->delete();
 });