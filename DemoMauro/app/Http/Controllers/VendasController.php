<?php

namespace DemoMauro\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DemoMauro\Vendas;
use Illuminate\Support\Facades\View;

class VendasController extends Controller
{
    public function todasVendas()
    {
    	$todasVendas = DB::table('vendas')->get();

    	return view::make('vendas', compact('todasVendas'));
    }

    public function selecaoVenda(){

    	$clientesVenda = DB::table('clientes')->get();
    	$produtosVenda = DB::table('produtos')->get();

    	return view::make('vendasCadastrar', compact('clientesVenda', 'produtosVenda'));
    }
}
	