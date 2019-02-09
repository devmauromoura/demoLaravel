@extends('layout.app')
@section('pageTitle', 'Vendas')
@section('content_page')
    <main>
        <div class="container">
            <div class="col s12">
                <h2>Vendas</h2>
            </div>
            <div class="row">
                 <!-- Modal Trigger -->
                 <button data-target="modal1" class="btn modal-trigger">Nova Venda</button>  
                  <!-- Modal Cadastro da Venda -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                <form action="/vendas/cadastrar" method="post">
                                    @csrf
                                    <h4>Cadastrar Venda</h4>
                                    <div class="col s12">
                                        <div class="input-field">
                                            <select class="browser-default" name="clienteVenda">
                                                <option disabled selected>Selecione o Cliente</option>
                                                @foreach($clientesVenda as $cli)
                                                <option value="{{$cli->nome}}">{{$cli->nome}}</option>
                                                 @endforeach    
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn" type="submit">Salvar</button>
                                </form>                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Cadastro dos produtos na venda -->
                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                <form action="/vendas/cadastrar" method="post">
                                    <div class="row">
                                        @csrf
                                        <h4>Cadastrar Produtos na Venda</h4>
                                        <div class="col s10">
                                            <div class="input-field">
                                                <select class="browser-default" name="clienteVenda">
                                                    <option disabled selected>Selecione o produto</option>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col s2">
                                            <div class="input-field">
                                                <label for="quantidadeProduto">Quantidade</label>
                                                <input type="text" id="quantidadeProduto" class="validate">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <button class="btn" type="submit">Adicionar</button>
                                                <button class="btn" type="submit">Salvar</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Produto</th>
                                                    <th>Quantidade</th>
                                                    <th>Valor</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Roteador Dlink</td>
                                                    <td>1</td>
                                                    <td>X</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="card-panel teal">
                                            <div class="right-align white-text"><b>Total Venda - R$ 00.41</b></div>
                                        </div>
                                    </div>                            
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
                        @foreach($todasVendas as $venda)
                        <tr>
                            <td>{{$venda->id}}</td>
                            <td>{{$venda->nome}}</td>
                            <td>???</td>
                            <td><i class="material-icons">edit</i><a href="" class="material-icons modal-trigger" data-target="modal2">list</a><i class="material-icons">cancel</i></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </main>
@endsection            