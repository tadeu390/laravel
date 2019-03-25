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
    return view('pagina');
});

Route::get('/primeiraview', function(){
	return view('minhaview');
});


//passando parametros pra view
Route::get('ola', function(){
	return view('minhaview')->with('nome', 'joao')->with('sobrenome', 'Silva');
});

Route::get('ola/{nome}/{sobrenome}', function($nome, $sobrenome){
	//return view('minhaview')->with('nome', $nome)->with('sobrenome', $sobrenome);
	
	//return view('minhaview', ['nome' => $nome, 'sobrenome' => $sobrenome]);
	
	return view('minhaview', compact('nome', 'sobrenome')); 
	//compact é uma função do php que monta o array assoativo apenas passando o nome das variaveis
});

//verificando se uma view existe

Route::get('/email/{email}', function($email){
	if(View::exists('email'))
		return view('email', compact('email'));
	else 
		return view('erro');
});

Route::get('/produtos', 'ProdutoController@listar');

Route::get('/sessaoprodutos/{palavra}', 'ProdutoController@sessaoprodutos');


Route::get('/mostraropcoes', 'ProdutoController@mostraropcoes');
Route::get('opcoes/{op}', 'ProdutoController@opcoes');

Route::get('/loopfor/{n}', 'ProdutoController@loopfor');

Route::get('foreach', 'ProdutoController@loopforeach');