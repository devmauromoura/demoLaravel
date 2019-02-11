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

        //SELECT clientes.id, clientes.nome FROM clientes INNER JOIN vendas ON vendas.idCliente = clientes.id
        $todasVendas = DB::table('clientes')->join('vendas','clientes.id','=','vendas.idCliente')->get();
        $clientesVenda = DB::table('clientes')->get();
        $itemVenda = DB::table('produtos')->get();

    	return view::make('vendas')->with(compact('itemVenda'))->with(compact('todasVendas'))->with(compact('clientesVenda'));
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

    public function removerVenda($id){
        $idVendaRemover = $id;
        DB::table('vendas')->where('id', $id)->delete();
    	return redirect('vendas');
    }
    
}
