@extends('layout.app')
@section('pageTitle', 'Movimentação')
@section('content_page')
  <main>
        <div class="container">
            <div class="row">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                <form action="/vendas/movimento/registrarProduto" method="POST">
                                     @csrf
                                    <div class="row">
                                        @foreach($dadosVenda as $dadosv)
                                        <h4>Produtos Venda N° {{$dadosv->id}}</h4>
                                        @endforeach
                                        <div class="col s10">
                                            <div class="input-field">
                                                <select class="browser-default" name="prodVenda" id="produto">
                                                    <option disabled selected>Selecione o produto</option>
                                                    @foreach($itemVenda as $item)
                                                    <option>{{$item->nome}} - R${{$item->valor}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col s2">
                                            <div class="input-field">
                                                <label for="quantidadeProduto">Quantidade</label>
                                                <input type="text" id="quantidadeProduto"  name="quantidadeProduto" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <table id="table">
                                            <thead>
                                                <tr>
                                                    <th>Produto</th>
                                                    <th>Quantidade</th>
                                                    <th>Valor</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="myRow">
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="card-panel teal">
                                            <div class="right-align white-text"><b>Total Venda - R$ 00.41</b></div>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <button class="btn" type="submit">Adicionar</button>
                                    </div>                            
                                </form>                                                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            <!-- =============== FIM CONTEUDO =============== -->  
    </main>
        
@endsection