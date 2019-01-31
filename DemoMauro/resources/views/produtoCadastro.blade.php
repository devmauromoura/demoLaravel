@extends('layout.app')
@section('content_page')
            <!-- =============== COMEÇO CONTEUDO =============== -->
            @foreach($produtoSelecionado as $produto)
            <form action="atualizar/{{$produto->id}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-4 espacoLateralEsquerdo">
                        <input type="text" class="form-control" placeholder="Nome Produto" name="nome" value="{{$produto->nome}}" required>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control" placeholder="UND. MED" name="unidMed" value="{{$produto->unid_med}}" required>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control" placeholder="QNTD" name="quantidade" value="{{$produto->quantidade}}" required>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control" placeholder="R$" name="valor" value="{{$produto->valor}}" required>
                    </div>
                    <div class="col-1">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                    </div>
                </div>
                @endforeach
            </form>
            <!-- =============== FIM CONTEUDO =============== -->
@endsection