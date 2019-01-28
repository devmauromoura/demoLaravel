@extends('layout.app')
@section('content_page')
                <!-- =============== COMEÇO CONTEUDO =============== -->
                <form>
                <div class="row">
                    <div class="col-6 espacoLateralEsquerdo">
                        <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="CPF">
                    </div>
                    <div class="col-1">
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </div>
                </div>
            </form>
            <!-- =============== FIM CONTEUDO =============== -->
@endsection