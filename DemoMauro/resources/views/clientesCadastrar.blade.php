@extends('layout.app')
@section('content_page')
                <!-- =============== COMEÇO CONTEUDO =============== -->
                <form action="cadastrar/now" method="POST">
                    @csrf
                <div class="row">
                    <div class="col-6 espacoLateralEsquerdo">
                        <input type="text" class="form-control" placeholder="Nome" name="nome" required>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="CPF" name="cpf" required>
                    </div>
                    <div class="col-1">
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </div>
                </div>
            </form>
           
            <!-- =============== FIM CONTEUDO =============== -->
@endsection
