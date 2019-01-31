@extends('layout.app')
@section('content_page')
            <!-- =============== COMEÇO CONTEUDO =============== -->
            <form action="/estoque/cadastrar/go" method="POST">
                @csrf
                <div class="row">
                    <div class="col-4 espacoLateralEsquerdo">
                        <input type="text" class="form-control" placeholder="Nome Produto" name="nome" required>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control" placeholder="UND. MED" name="unidMed" required>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control" placeholder="QNTD" name="quantidade" required>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control" placeholder="R$" name="valor" required>
                    </div>
                    <div class="col-1">
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </div>
                </div>
            </form>
            <!-- =============== FIM CONTEUDO =============== -->
@endsection