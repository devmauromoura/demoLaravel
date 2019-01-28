<!doctype html>
<html lang="PT-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/indice.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/estiloGeral.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
    <div class="container-fluid">
        <header>
            <h3 class="text-center">Demo Mauro</h3>
            <h4 class="text-center">Dashboards</h4>            
        </header>           
        <div class="row">
            <!-- =============== COMEÇO MENU LATERAL =============== -->
            <div class="col-0 position-static menuLateral">
                <nav class="navbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/">Índice</a>
                            <a class="nav-link text-light" href="/clientes">Clientes</a>
                        </li>
                        <li class="nav-item dropdown dropright">
                            <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Produtos</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/estoque">Estoque</a>
                                <a class="dropdown-item" href="/vendas">Vendas</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- =============== FIM MENU LATERAL =============== -->