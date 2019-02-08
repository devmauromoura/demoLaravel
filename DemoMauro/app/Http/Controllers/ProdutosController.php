<?php

namespace DemoMauro\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DemoMauro\Produtos;
use Illuminate\Support\Facades\View;

class ProdutosController extends Controller
{
	public function todosProdutos(){
		$todosProdutos = DB::table('produtos')->get();

		return view::make('estoque', compact('todosProdutos'));
	}

	public function cadastrarProduto(Request $request){
		$nomeProduto = $request->input('nome');
		$unidMedProduto = $request->input('unidMed');
		$quantidadeProduto = $request->input('quantidade');
		$valorProduto = $request->input('valor');

		DB::table('produtos')->insert(['nome' => $nomeProduto, 'unid_med' => $unidMedProduto, 'quantidade' => $quantidadeProduto, 'valor' => $valorProduto]);

		return redirect('estoque');
	}

	public function atualizarProduto(Request $request){
		$idProdutoAtualizar = $request->input('idProd');
		$nomeProdutoAtualizar = $request->input('nome');
		$unidMedProdutoAtualizar = $request->input('unidMed');
		$quantidadeProdutoAtualizar = $request->input('quantidade');
		$valorProdutoAtualizar = $request->input('valor');

		DB::table('produtos')->where('id', $idProdutoAtualizar)->update([
			"nome" => $nomeProdutoAtualizar, 
			"unid_med" => $unidMedProdutoAtualizar, 
			"quantidade" => $quantidadeProdutoAtualizar,
			"valor" => $valorProdutoAtualizar]);

		return redirect('estoque');
	}

    public function removerProduto($id){
    	$idDeleteProduto = $id;
    	DB::table('produtos')->where('id', $idDeleteProduto)->delete();
    	return redirect('estoque');
    }	
}
