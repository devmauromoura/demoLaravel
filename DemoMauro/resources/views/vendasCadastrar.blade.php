@extends('layout.app')
@section('content_page')
            <!-- =============== COMEÇO CONTEUDO =============== -->
            <form>
                <div class="row">
                    <div class="col-4 espacoLateralEsquerdo">
                        <select class="form-control">
                            <option>Selecione o Cliente...</option>
                            @foreach($clientesVenda as $cliente)
                            <option value="{{$cliente->nome}}">{{$cliente->nome}}</option>
                              @endforeach
                        </select>
                    </div>

                    <div class="col-4">
                        <select type="text" class="form-control">
                            <option>Selecione o Produto...</option>
                            @foreach($produtosVenda as $produto)
                            <option value="{{$produto->nome}}" id="produtoAdd">{{$produto->nome}}</option>
                              @endforeach
                        </select>                        
                    </div>
                    <div class="col-2">
                        <input class="form-control" type="text" placeholder="Qntd" id='quantidade'>
                    </div>
                    <div class="col-1">
                        <button class="btn btn-primary" type="submit">Adicionar</button>
                    </div>
                </div>
            </div>

            </form>
                <div class="row">
                    <div class="col">
                        <table class="table table-striped" id="tbl">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Produto</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Unid.Med</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Produto 1</td>
                                    <td>3</td>
                                    <td>PÇ</td>
                                    <td>40,00 </td>
                                    <td><i class="material-icons">edit</i>
                                        <i class="material-icons">cancel</i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>            
                <div class="col">
                        <button class="btn btn-primary" type="submit">Cadastrar Venda</button>
                </div>
            <!-- =============== FIM CONTEUDO =============== -->
@endsection