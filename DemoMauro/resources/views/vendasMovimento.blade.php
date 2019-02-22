@extends('layout.app')
@section('content_page')
               <!-- Modal Cadastro dos produtos na venda -->
                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                <form action="" method="post">
                                    <div class="row">
                                        @csrf
                                        <h4>Cadastrar Produtos na Venda</h4>
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
                                                <input type="text" id="quantidadeProduto" class="validate">
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
                                </form>
                                <div class="row">
                                    <div class="col s12">
                                        <button class="btn" onclick="addHtmlTableRow()">Adicionar</button>
                                        <button class="btn" type="submit">Salvar</button>
                                    </div>
                                </div>                                                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              <!-- =============== COMEÇO CONTEUDO =============== -->

            <!-- =============== FIM CONTEUDO =============== -->
@endsection