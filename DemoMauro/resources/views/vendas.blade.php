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
                  <!-- Modal Structure -->
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
                            <td><i class="material-icons">edit</i><i class="material-icons">list</i><i class="material-icons">cancel</i></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </main>
@endsection            