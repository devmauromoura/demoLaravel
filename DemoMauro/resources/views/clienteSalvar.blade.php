@extends('layout.app')
@section('content_page')  
            <!-- =============== COMEÇO CONTEUDO =============== -->
            @foreach($dadosCliente as $cliente)
            <form action="/clientes/cadastro/atualizar/{{$cliente->id}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col espacoLateralEsquerdo">
                        <input type="text" class="form-control" placeholder="Nome" name="nome" value="{{$cliente->nome}}" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="CPF" name="cpf" value="{{$cliente->cpf}}" required>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                    </div>
                </div>
                @endforeach
            </form>
          
            <!-- =============== FIM CONTEUDO =============== -->
@endsection 