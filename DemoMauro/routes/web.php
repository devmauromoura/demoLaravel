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

Route::get('/', 'DashController@DadosGerais');
Route::prefix('/clientes')->group
(
    function()
    {
        Route::get('/', 'ClientesController@listarClientes');
        
        Route::get('/cadastrar', function(){
            return view('clientesCadastrar');
        });
        Route::post('/cadastrar/now', 'ClientesController@cadastrarClientes');

      	Route::get('/cadastro/{id}', 'ClientesController@idCliente');

      	Route::post('/cadastro/atualizar/{id}', 'ClientesController@atualizarCliente');

      	Route::get('/cadastro/remover/{id}', 'ClientesController@removerCliente');
    }
);