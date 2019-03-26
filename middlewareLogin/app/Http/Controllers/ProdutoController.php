<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function __construct()
    {
       // $this->middleware(\App\Http\Middleware\ProdutoAdmin::class);
    }
    public function index()
    {
        echo "Produtos<br /><br />";
        echo"Televisão<br />";
        echo"Notebook";
    }
}
