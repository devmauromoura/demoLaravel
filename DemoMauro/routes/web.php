<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* ######################################## CONTROLE INDEX ######################################## */
Route::get('/', 'DashController@DadosGerais');

/* ######################################## CONTROLE CLIENTES ######################################## */
Route::prefix('/clientes')->group
(
    function()
    {
        Route::get('/', 'ClientesController@listarClientes');
        Route::post('/cadastrar/now', 'ClientesController@cadastrarClientes');
      	Route::get('/cadastro/atualizar', 'ClientesController@atualizarCliente');
      	Route::get('/cadastro/remover/{id}', 'ClientesController@removerCliente');
    }
);

/* ######################################## CONTROLE PRODUTOS/ESTOQUE ######################################## */
Route::prefix('/estoque')->group
(
    function()
    {
        Route::get('/', 'ProdutosController@todosProdutos');
        
        Route::post('/cadastrar/go', 'ProdutosController@cadastrarProduto');
        Route::get('/cadastro/atualizar', 'ProdutosController@atualizarProduto');
        Route::get('/cadastro/remover/{id}', 'ProdutosController@removerProduto');
    }
);

/* ######################################## CONTROLE VENDAS ######################################## */

Route::prefix('/vendas')->group
(
    function()
    {
        Route::get('/', 'VendasController@todasVendas');
        Route::post('/cadastrar', 'VendasController@novaVenda');
        Route::get('/remover/{id}', 'VendasController@removerVenda');
        Route::get('/movimento/{id}', 'VendasController@movimentoVenda');
        Route::post('/movimento/registrarProduto/{id}', 'VendasController@movimentoCadastrar');
 });

Route::get('/sobre', function(){
    return view('sobre');
});