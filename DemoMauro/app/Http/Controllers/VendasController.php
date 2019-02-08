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
        $clientesVenda = DB::table('clientes')->get();
        $produtosVenda = DB::table('produtos')->get();

    	return view::make('vendas', compact('todasVendas'), compact('clientesVenda'), compact('produtosVenda'));
    }

    public function novaVenda(Request $request){
        $cliente = $request->input('clienteVenda');

        $idClienteArray = DB::table('clientes')->select('id')->where('nome', $cliente)->get();
        $idCliente = $idClienteArray[0]->id;

        DB::table('vendas')->insert([
            'idCliente' => $idCliente
        ]);

        return redirect('vendas');
    }
}