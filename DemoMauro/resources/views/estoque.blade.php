@extends('layout.app')
@section('content_page')
            <!-- =============== COMEÇO CONTEUDO =============== -->

        
            <div class="col">
                <div class="row">
                    <div class="col">
                        <a href="/estoque/cadastrar" class="material-icons"> add_circle_outline</a>
                    </div>
                    <div class="col-10"></div>
                </div>
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="buscarCliente" placeholder="Buscar...">
                            </div>
                        </form>
                    </div>
                    <div class="col-10"></div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">UND. MED.</th>
                                    <th scope="col">QNTD</th>
                                    <th scope="col">R$</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($todosProdutos as $produto)
                                <tr>
                                    <th scope="row">{{$produto->id}}</th>
                                    <td>{{$produto->nome}}</td>
                                    <td>{{$produto->unid_med}}</td>
                                    <td>{{$produto->quantidade}}</td>
                                    <td>{{$produto->valor}}</td>
                                    <td>
                                        <a href="/estoque/cadastro/{{$produto->id}}" class="material-icons">edit</a>
                                        <a href="/estoque/cadastro/remover/{{$produto->id}}" class="material-icons">cancel</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- =============== FIM CONTEUDO =============== -->
@endsection            