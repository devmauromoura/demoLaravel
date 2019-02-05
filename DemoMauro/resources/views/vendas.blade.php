@extends('layout.app')
@section('content_page')
    <main>
        <div class="container">
            <div class="col s12">
                <h2>Vendas</h2>
            </div>
            <div class="row">
                 <!-- Modal Trigger -->
                 <button data-target="modal1" class="btn modal-trigger">Nova Venda</button>  
                  <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                <form action="" method="post">
                                    <h4>Cadastrar Venda</h4>
                                    <div class="col s6">
                                        <div class="input-field">
                                            <input placeholder="Ex.: Roteador X" id="nomeProduto" type="text" class="validate" required>
                                            <label for="nomeProduto">Nome Produto</label>
                                        </div>
                                    </div>
                                    <div class="col s2">
                                        <div class="input-field">
                                            <select>
                                                <option value="und">Unidade</option>
                                                <option value="mt">Metros</option>
                                                <option value="kit">Kit</option>
                                            </select>
                                            <label>Und. Medida</label>
                                        </div>
                                    </div>
                                    <div class="col s2">
                                        <div class="input-field">
                                            <input type="text" id="quantidadeProduto" class="validate" required>
                                            <label for="quantidadeProduto">Qntd</label>
                                        </div>
                                    </div>
                                    <div class="col s2">
                                        <div class="input-field">
                                            <input type="text" id="valorProduto" class="validate" required>
                                            <label for="valorProduto">Valor R$</label>
                                        </div>
                                    </div>
                                    <button class="btn" type="submit">Salvar</button>
                                </form>                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cliente</th>
                            <th>Valor</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Fulano</td>
                            <td>456</td>
                            <td><i class="material-icons">edit</i><i class="material-icons">cancel</i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </main>
@endsection            