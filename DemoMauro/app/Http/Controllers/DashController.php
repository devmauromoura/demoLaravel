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
		$totalProdutos = DB::table('produtos')->count();
		//$totalVendas = DB::table('vendas')->count();

		$totalVendas = 2;
		
		return view::make('index', compact('totalClientes', 'totalProdutos', 'totalVendas'));
	}
}
	