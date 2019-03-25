<?php

use Illuminate\Http\Request;

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
    return "<H1>LARAVEL</H1>";
});

Route::get('/ola', function () {
    return "<H1>LARAVEL2</H1>";
});

Route::get('/ola/sejabemvindo', function () {
    return view("welcome");
});

Route::get('/nome/{nome}/{sobrenome}', function($nome, $sobrenome){
	return "<h1>Olá $nome $sobrenome</h1>";
});

Route::get('/seunomecomregra/{nome}/{sobrenome}', function($nome, $sobrenome = false){
	return "<h1>Olá $nome $sobrenome</h1>";
})->where('n', '[0-9]+')->where('nome', '[a-zA-Z]+');

Route::get('/seunomesemregra/{nome?}', function($nome = null){ //ou coloca o sinal de interrogação ou atribui null ao parâmetro da função anônima
	return "<h1>Olá $nome</h1>";
});


//agrupamento de rota
Route::prefix('app')->group(function(){
	Route::get('/', function () {
		return "pagina principal";
	});

	Route::get('/profile', function () {
		return "pagina profile";
	});
	
	Route::get('/about', function () {
		return "pagina about";
	});
});


//redirecionamento
Route::redirect('/aqui', '/ola', 301);//funciona, mas apenas no web server do laravel


//retornando view direto
/*Route::get('/hello', function () {
	return view("hello");
});*/

//ou

Route::view('hello', 'hello');

//Route::view('hellonome', 'hellonome', ['nome' => 'tadeu', 'sobrenome' => 'torres']);


//---


Route::get('/hellonome/{nome}/{sobrenome}', function ($nome, $sobrenome) {
	return view('hellonome', ['nome' => $nome, 'sobrenome' => $sobrenome]);
});

Route::get('/rest/hello', function(){
	return "Hello (GET)";
});

Route::post('/rest/hello', function(){
	return "Hello (POST)";
});

Route::delete('/rest/hello', function(){
	return "Hello (DELETE)";
});

Route::put('/rest/hello', function(){
	return "Hello (PUT)";
});

Route::patch('/rest/hello', function(){
	return "Hello (PATCH)";
});

Route::options('/rest/hello', function(){
	return "Hello (OPTIONS)";
});

//parâmetros
Route::post('/rest/imprimir', function(Request $req){
	$nome = $req->nome;
	$idade = $req->idade;
	return "Hello $nome - $idade ||(POST)";
});


//agrupar vários métodos (post, get...) para serem atendidos por uma mesma função anônima
Route::match(['get', 'post'], '/rest/hello2', function(){
	return "Hello World 2!!";
});

//atende a todos os métodos (get, post....)
Route::any('/rest/hello3', function(){
	return "Hello World 2!!";
});

///nomeando rotas
Route::get('/produtos', function(){
	echo "<h1>Produtos</h1>";
	echo "<ol>";
		echo "<li>";
			echo "Notebook";
		echo "</li>";
		echo "<li>";
			echo "Impressora";
		echo "</li>";
		echo "<li>";
			echo "Mouse";
		echo "</li>";
	echo "</ol>";
})->name('meusprodutos');


Route::get('/linkprodutos', function(){
	$url = route('meusprodutos');
	echo "<a href='".$url."'>Meus produtos</a>";
});

//nomeando a rota, você a chama pelo nome dado a rota. Se por acaso a rota for alterada
//os locais aonde ela é chamada irão continuar funcionando normalmente.
//É RECOMENDADO USAR NOME PARA AS ROTAS


//------------

Route::get('/redirecionarprodutos', function(){
	return redirect()->route('meusprodutos');
});