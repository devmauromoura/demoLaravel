@extends('layout.app')
@section('content_page')        
<div class="col">
                <div class="row">
                    <div class="col">
                        <a href="/clientes/cadastrar" title="Cadastrar" class="material-icons"> add_circle_outline</a>
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
                                    <th scope="col">CPF</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clientes as $cli)
                                <tr>
                                    <th scope="row">{{$cli->id}}</th>
                                    <td>{{$cli->nome}}</td>
                                    <td>{{$cli->cpf}}</td>
                                    <td>
                                        <a href="/clientes/cadastro/{{$cli->id}}" class="material-icons">edit</a>
                                        <a href="/clientes/cadastro/remover/{{$cli->id}}" class="material-icons">cancel</a>
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