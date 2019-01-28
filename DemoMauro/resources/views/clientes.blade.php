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
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mauro</td>
                                    <td>058.774.161-97</td>
                                    <td><i class="material-icons">edit</i>
                                        <i class="material-icons">cancel</i>
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