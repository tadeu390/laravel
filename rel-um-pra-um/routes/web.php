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
use App\Cliente;
use App\Endereco;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', function(){
    $clientes = Cliente::all();
    foreach($clientes as $cliente)
    {
        echo"Id: ".$cliente->id."<br />";
        echo"Nome: ".$cliente->nome."<br />";
        echo"Telefone: ".$cliente->telefone."<br />";
        echo"<hr>";
        echo"Endereco";
        echo"Id: ".$cliente->endereco->id."<br />";
        echo"Rua: ".$cliente->endereco->rua."<br />";
        echo"Número: ".$cliente->endereco->numero."<br />";
        echo"Bairro: ".$cliente->endereco->bairro."<br />";
        echo"Cidade: ".$cliente->endereco->cidade."<br />";
        echo"UF: ".$cliente->endereco->uf."<br />";
        echo"CEP: ".$cliente->endereco->cep."<br />";
        echo"<hr>";
    }
});

Route::get('/enderecos', function(){
    $enderecos = Endereco::all();
    foreach($enderecos as $endereco)
    {
        echo"Id: ".$endereco->id."<br />";
        echo"Rua: ".$endereco->rua."<br />";
        echo"Número: ".$endereco->numero."<br />";
        echo"Bairro: ".$endereco->bairro."<br />";
        echo"Cidade: ".$endereco->cidade."<br />";
        echo"UF: ".$endereco->uf."<br />";
        echo"CEP: ".$endereco->cep."<br />";
        echo"<hr> Cliente";
        echo"Id: ".$endereco->cliente->id."<br />";
        echo"Nome: ".$endereco->cliente->nome."<br />";
        echo"Telefone: ".$endereco->cliente->telefone."<br />";
        echo"<hr>";
    }
});


//inserir através do relacionamento

Route::get('/inserir', function(){
    $c = new Cliente();
    $c->nome = "Tadeu";
    $c->telefone = "11 3453-3453";
    $c->save();

    $e = new Endereco();
    $e->rua = "Avenida 1";
    $e->numero = 23;
    $e->bairro = "centro";
    $e->cidade = "são paulo";
    $e->uf = "sp";
    $e->cep = "23567-000";

    $c->endereco()->save($e);

    $c = new Cliente();
    $c->nome = "Marcos silva";
    $c->telefone = "12 3453-3453";
    $c->save();

    $e = new Endereco();
    $e->rua = "Avenida do braz, 400";
    $e->numero = 23;
    $e->bairro = "jardim";
    $e->cidade = "são paulo";
    $e->uf = "sp";
    $e->cep = "23567-044";

    $c->endereco()->save($e);
});

Route::get('/clientes/json', function(){
    //por padrão o laravel não carrega os relacionamentos, isso é chamado de lazy loading
    //ou seja, carregamento preguiçoso. isso é pra evitar carregar algo que não será usado
    $clientes = Cliente::all();
    //abaixo estão espeficando os relacionamentos que devem ser carregados. isso se chama eager loading ou carregamento antecipado
    $clientes = Cliente::with(['endereco'])->get();
    return $clientes->toJson();
});

//abaixo segue a mesma ideia do método de cima.
Route::get('/enderecos/json', function(){

    $enderecos = Endereco::all();
    $enderecos = Endereco::with(['cliente'])->get();
    return $enderecos->toJson();
});