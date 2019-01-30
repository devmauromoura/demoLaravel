<?php

namespace DemoMauro\Http\Controllers;

use Illuminate\Http\Request;	
use DemoMauro\Dash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class DashController extends Controller
{
 
	public function DadosGerais(){
		$totalClientes = DB::table('clientes')->count();
		//$totalProdutos = DB::table('estoque')->count();
		//$totalVendas = DB::table('vendas')->count();

		$totalProdutos = 1;
		$totalVendas = 2;
		
		return view::make('index', compact('totalClientes', 'totalProdutos', 'totalVendas'));
	}
}
	