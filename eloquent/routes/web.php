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
Use\App\Categoria;

Route::get('/', function () {
    $cats = Categoria::all();
    foreach($cats as $item)
    {
        echo "ID: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
    }
});

Route::get('/inserir/{nome}', function($nome){
    $cat = new Categoria();
    $cat->nome = $nome;
    $cat->save();
    return redirect('/');
});

Route::get('/categoria/{id}', function($id){
    $cat = new Categoria();
    $cat = $cat->findOrFail($id);

    echo "ID: ".$cat->id."<br />";
    echo "nome: ".$cat->nome."<br />";
});

Route::get('/atualizar/{id}/{nome}', function($id, $nome){
    $cat = new Categoria();
    $cat = $cat->findOrFail($id);
    $cat->nome = $nome;
    $cat->save();
});

Route::get('/remover/{id}', function($id){
    $cat = new Categoria();
    $cat = $cat->findOrFail($id);
    $cat->delete();
    redirect('/');
});

Route::get('/categoriaPorNome/{nome}', function($nome){
    $cat = new Categoria();
    $cats = $cat->where('nome', $nome)->get();
    foreach($cats as $item)
    {
        echo "ID: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
        echo "<br />";
    }
});

Route::get('/categoriaIdMaiorQue/{id}', function($id){
    $cat = new Categoria();
    $cats = $cat->where('id', '>', $id)->get();
    foreach($cats as $item)
    {
        echo "ID: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
        echo "<br />";
    }
    echo "<hr>";
    $cats = $cat->where('id', '>', $id)->count();
    echo "Quantidade: ".$cats;

    echo "<hr>";
    $cats = $cat->where('id', '>', $id)->max('id');
    echo "Maior: ".$cats;
});

Route::get('/ids123', function(){
    $cat = new Categoria();
    $cats = $cat->find([1,2,3]);
    foreach($cats as $item)
    {
        echo "ID: ".$item->id."<br />";
        echo "nome: ".$item->nome."<br />";
        echo "<br />";
    }
});

//imprime tudo inclusive as apagadas. OBS.: O MÉTODO ALL EM SI RETORNA APENAS OS REGISTROS QUE
//NÃO ESTÃO APGADOS.
Route::get('/todas', function () {
    $cats = Categoria::withTrashed()->get();
    foreach($cats as $item)
    {
        echo "ID: ".$item->id."<br />";
        echo "nome: ".$item->nome;
        if($item->trashed())
            echo " (APAGADO)";
        echo "<br />";
    }
});

//buscando registro "apagado"
Route::get('/ver/{id}', function($id){
    $cat = new Categoria();
    //$cat = $cat->withTrashed()->findOrFail($id);
    $cat = $cat->withTrashed()->where('id', $id)->get()->first();

    echo "ID: ".$cat->id."<br />";
    echo "nome: ".$cat->nome."<br />";
});

Route::get('/somenteApagadas', function(){
    $cat = new Categoria();
    //$cat = $cat->withTrashed()->findOrFail($id);
    $cats = $cat->onlyTrashed()->get();

    foreach($cats as $item)
    {
        echo "ID: ".$item->id."<br />";
        echo "nome: ".$item->nome;
        if($item->trashed())
            echo " (APAGADO)";
        echo "<br />";
    }
});

Route::get('/restaurar/{id}', function($id){
    $cat = new Categoria();
    //$cat = $cat->withTrashed()->find($id);
   // $cat->restore();

});

Route::get('/apagarPermanente/{id}', function($id){
    $cat = new Categoria();
    $cat = $cat->findOrFail($id);
    $cat->forceDelete();
    redirect('/todas');
});