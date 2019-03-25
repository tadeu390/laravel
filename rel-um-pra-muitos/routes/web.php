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
use App\Categoria;
use App\Produto;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', function(){
    $cats = Categoria::all();
    foreach($cats as $cat)
    {
        echo "Id: ".$cat->id."<br />";
        echo "Nome: ".$cat->nome;
        echo "<br>";
        foreach($cat->produtos as $produto)
        {
            echo"<hr>Produtos<br />";
            echo "Id: ".$produto->id."<br />";
            echo "Nome: ".$produto->nome."<br />";
            echo "Estoque: ".$produto->estoque."<br />";
            echo "Preço: ".$produto->preco."<br />";
            echo "Categoria: ".$produto->categoria->nome."<br />";
            echo"Produtos<hr>";
        }
        echo"<br>";
        echo"<hr>";
    }
});

Route::get('/produtos', function(){
    $prods = Produto::all();
    foreach($prods as $prod)
    {
        echo "Id: ".$prod->id."<br />";
        echo "Nome: ".$prod->nome."<br />";
        echo "Estoque: ".$prod->estoque."<br />";
        echo "Preço: ".$prod->preco."<br />";
        echo "Categoria: ".(isset($prod->categoria) ? $prod->categoria->nome : '')."<br />";
        echo"<hr>";
    }
});

Route::get('/categorias/json', function(){
    $cats = Categoria::with(['produtos'])->get();
    return $cats->toJson();
});

Route::get('/adicionarProduto', function(){
    $cat = Categoria::find(1);

    $prod = new Produto();
    $prod->nome = "Novo produto";
    $prod->preco = 10;
    $prod->estoque = 100;
    $prod->categoria()->associate($cat);
    $prod->save();
    return $prod->toJson();
});

Route::get('/desassociarCategoria', function(){
    $prod = Produto::find(1);

    $prod->categoria()->dissociate();
    $prod->save();
});