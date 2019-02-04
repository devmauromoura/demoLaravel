@extends('layout.app')
@section('pageTitle', 'Índice')
@section('content_page')
    <main>
        <div class="container">
            <div class="col s12">
                <h2>Dashboard</h2>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="col s12 m3">
                            <div class="card-panel teal">
                                <p class="white-text center-align">Total Clientes</p>
                                <h3 class="white-text center-align">{{$totalClientes}}</h3>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="card-panel teal">
                                <p class="white-text center-align">Total Produtos</p>
                                <h3 class="white-text center-align">{{$totalProdutos}}</h3>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="card-panel teal">
                                <p class="white-text center-align">Total Vendas</p>
                                <h3 class="white-text center-align">{{$totalVendas}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>            
@endsection