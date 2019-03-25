<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function listar()
	{
		$produtos = ['Notebook', 'Mouse', 'Teclado', 'Monitor 21', 'Impressora', 'SSD'];
		
		return view('produtos', compact('produtos'));
	}
	
	public function sessaoprodutos($palavra)
	{
		return view('sessaoprodutos', compact('palavra'));
	}
	
	public function mostraropcoes()
	{
		return view('mostraropcoes');
	}
	
	public function opcoes($opcao)
	{
		return view('opcoes', compact('opcao'));
	}
	
	public function loopfor($n)
	{
		return view('loopfor', compact('n'));
	}
	
	public function loopforeach()
	{
		$produtos = [
			['id' => '1', 'nome' => 'computador'],
			['id' => '2', 'nome' => 'mouse'],
			['id' => '3', 'nome' => 'impressora'],
			['id' => '4', 'nome' => 'monitor'],
			['id' => '5', 'nome' => 'teclado'],
		];
		
		return view('foreach', compact('produtos'));
	}
}
