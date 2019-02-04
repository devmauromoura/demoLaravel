@extends('layout.app')
@section('content_page')
            <!-- =============== COMEÇO CONTEUDO =============== -->

        
            <div class="col">
                <div class="row">
                    <div class="col">
                        <a href="/vendas/cadastrar" class="material-icons"> add_circle_outline</a>
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
                                    <th scope="col">Cliente</th>
                                    <th scope="col">R$</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($todasVendas as $venda)
                                <tr>
                                    <th scope="row">{{$venda->id}}</th>
                                    <td>{{$venda->cliente}}</td>
                                    <td>{{$venda->valor}}</td>
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