<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControladorController extends Controller
{
    public function getNome()
	{
		return "Tadeu Torres";
	}
	
	public function getIdade()
	{
		return "20 anos";
	}
	
	public function multiplicar($n1, $n2)
	{
		return $n1 * $n2;
	}
	
	public function getNomeById($id)
	{
		$v = ['Mario', 'Edson', 'Roberto', 'Gean'];
		
		if($id >= 0 && $id < COUNT($v))
			return $v[$id];
		else 
			return "Não encontrado.";
	}
}
