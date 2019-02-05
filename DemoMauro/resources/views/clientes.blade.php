@extends('layout.app')
@section('pageTitle', 'Clientes')
@section('content_page')        
    <main>
        <div class="container">
            <div class="col s12">
                <h2>Clientes</h2>
            </div>
            <div class="row">
                 <!-- Chama Modal -->
                 <button data-target="modal1" class="btn modal-trigger">Novo Cadastro</button>
                  <!-- Modal Estrutura Novo Cadastro -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                <form action="clientes/cadastrar/now" method="post">
                                    @csrf
                                    <h4>Cadastrar Novo Cliente</h4>
                                    <div class="col s6">
                                        <div class="input-field ">
                                            <input placeholder="Ex.: Fulano da Silva" id="nomeCompleto" name="nome" type="text" class="validate" required>
                                            <label for="nomeCompleto">Nome</label>
                                        </div>
                                    </div>
                                    <div class="col s6">
                                        <div class="input-field ">
                                            <input placeholder="Ex.: 000.000.000-00" id="cpf" name="cpf" type="text" class="validate" required>
                                            <label for="cpf">CPF</label>
                                        </div>
                                    </div>
                                    <button class="btn" type="submit">Salvar</button>
                                </form>                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                <form action="" method="post">
                                    @csrf
                                    <h4>Cadastro Cliente</h4>
                                    <div class="col s6">
                                        <div class="input-field ">
                                            <input value="" id="nomeCompleto" name="nome" type="text" class="validate" required>
                                            <label for="nomeCompleto">Nome</label>
                                        </div>
                                    </div>
                                    <div class="col s6">
                                        <div class="input-field ">
                                            <input data  id="cpf" name="cpf" type="text" class="validate" required>
                                            <label for="cpf">CPF</label>
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
                            <th>Nome</th>
                            <th>CPF</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cli)
                        <tr>
                            <td>{{$cli->id}}</td>
                            <td>{{$cli->nome}}</td>
                            <td>{{$cli->cpf}}</td>
                            <td><a href="" data-nome="{{$cli->nome}}" data-cpf="" data-target="modal2" class="material-icons modal-trigger">edit</a><a href="clientes/cadastro/remover/{{$cli->id}}" class="material-icons">cancel</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script type="text/javascript">
@endsection