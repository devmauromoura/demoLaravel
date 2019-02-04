<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('./css/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('./css/customizacao.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>@yield('pageTitle')</title> 
    <script type="text/javascript" src="{{URL::asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery-2.1.1.min.js')}}"></script>
</head>

<body>
    <header>
    </header>
    <div class="sidenav sidenav-fixed">
        <li><img class="logoDm" src="img/logoDemo.png" alt="Logo" width="150px"></li>
        <p class="center-align">Demonstrativo Mauro</p>
        <li><a href="/"><i class="material-icons">home</i> Índice</a></li>
        <li><a href="/clientes"><i class="material-icons">person</i> Clientes</a></li>
        <li><a href="/estoque"><i class="material-icons">assignment</i>Estoque</a></li>
        <li><a href="/vendas"><i class="material-icons">attach_money</i>Vendas</a></li>
        <li><a href="/sobre"><i class="material-icons">warning</i>Sobre</a></li>
    </div>