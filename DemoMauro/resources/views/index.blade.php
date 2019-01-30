@extends('layout.app')
@section('content_page')
            <!-- =============== COMEÇO CONTEUDO =============== -->
            <div class="col">
                <div class="row">
                    <div class="col dashClientes">
                        <p class="text-center tituloDash">Total de Clientes</p>
                        <p class="text-center font-weight-bold valorDash">{{$totalClientes}}</p>
                    </div>
                    
                    <div class="col dashProdutos borderDash">
                        <p class="text-center tituloDash">Total de Produtos</p>
                        <p class="text-center font-weight-bold valorDash">{{$totalProdutos}}</p>
                    </div>
            
                    <div class="col dashVendas borderDash">
                        <p class="text-center tituloDash">Total de Vendas</p>
                        <p class="text-center font-weight-bold valorDash">{{$totalVendas}}</p>                        
                    </div>
                </div>
            </div>
            <!-- =============== FIM CONTEUDO =============== -->
@endsection