<?php

namespace DemoMauro\Http\Controllers;

use Illuminate\Http\Request;
use DemoMauro\Clientes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ClientesController extends Controller
{

		//Método Construtor
	 protected $cliente = null;	

	 public function __construct(Clientes $cliente){
	 	 $this->clientes = $cliente;
	 }

    
    	//Função Controller
    public function listarClientes(){
        return $this->clientes->listarClientes();
    }

    public function cadastrarClientes(Request $request)
    {
    	$nomeInsert = $request->input('nome');
    	$cpfInsert = $request->input('cpf');

    	DB::table('clientes')->insert([
    		'nome' => $nomeInsert, 'cpf'=> $cpfInsert
    	]);

    	return redirect('clientes');
    }

    public function atualizarCliente(Request $request)
    {
    	$idUpdate = $request->input('idCliente');
    	$nomeUpdate = $request->input('cNome');
    	$cpfUpdate = $request->input('cCpf');

        //echo $idUpdate."<br>".$nomeUpdate."<br>".$cpfUpdate;

    	DB::table('clientes')->where('id', $idUpdate)->update(array('nome' => $nomeUpdate, 'cpf' => $cpfUpdate));

    	return redirect('clientes');
    }

    public function removerCliente($id){
    	$idDelete = $id;
    	DB::table('clientes')->where('id', $idDelete)->delete();

    	return redirect('clientes');
    }

}
