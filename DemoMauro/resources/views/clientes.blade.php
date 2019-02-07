@extends('layout.app')
@section('pageTitle', 'Clientes')
@section('content_page')        
    <main>
        <div class="container">
            <div class="col s12">
                <h2>Clientes</h2>
            </div>
            <div class="row">
                 <!-- Chama Modal -->
                 <button data-target="modal1" class="btn modal-trigger">Novo Cadastro</button>
                  <!-- Modal Estrutura Novo Cadastro -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                <form action="clientes/cadastrar/now" method="post">
                                    @csrf
                                    <h4>Cadastrar Novo Cliente</h4>
                                    <div class="col s6">
                                        <div class="input-field ">
                                            <input placeholder="Ex.: Fulano da Silva" id="nomeCompleto" name="nome" type="text" class="validate" required>
                                            <label for="nomeCompleto">Nome</label>
                                        </div>
                                    </div>
                                    <div class="col s6">
                                        <div class="input-field ">
                                            <input placeholder="Ex.: 000.000.000-00" id="cpf" name="cpf" type="text" class="validate" required>
                                            <label for="cpf">CPF</label>
                                        </div>
                                    </div>
                                    <button class="btn" type="submit">Salvar</button>
                                </form>                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                <form action="/clientes/cadastro/atualizar/" method="get">
                                    @csrf
                                    <h4>Cadastro Cliente</h4>
                                    <div class="col s1">
                                        <div class="input-field">
                                            <label>#</label>
                                            <input placeholder="" id="idCliente" type="text" name="idCliente" value="">
                                        </div>
                                    </div>
                                    <div class="col s6">
                                        <div class="input-field ">
                                            <label>Nome</label>
                                            <input placeholder="" value="" id="cNome" name="cNome" type="text" class="validate" required>
                                        </div>
                                    </div>
                                    <div class="col s5">
                                        <div class="input-field ">
                                            <input placeholder="" id="cCpf" name="cCpf" type="text" class="validate" required>
                                            <label for="cCpf">CPF</label>
                                        </div>
                                    </div>
                                    <button class="btn" type="submit">Salvar</button>
                                </form>                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                         
                <table id="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th id="nome">Nome</th>
                            <th id="cpf">CPF</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cli)
                        <tr>
                            <td>{{$cli->id}}</td>
                            <td>{{$cli->nome}}</td>
                            <td>{{$cli->cpf}}</td>
                            <td>
                                <a href="" onclick="editHtmlTbleSelectedRow()" data-target="modal2" class="material-icons modal-trigger">edit</a>
                                <a href="clientes/cadastro/remover/{{$cli->id}}" class="material-icons">cancel</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script>
             var rIndex,
             table = document.getElementById("table");
         
         function selectedRowToInput()
         {
             
             for(var i = 1; i < table.rows.length; i++)
             {
                 table.rows[i].onclick = function()
                 {
                   // get the seected row index

                   rIndex = this.rowIndex;
                   document.getElementById("idCliente").value = this.cells[0].innerHTML;
                   document.getElementById("cNome").value = this.cells[1].innerHTML;
                   document.getElementById("cCpf").value = this.cells[2].innerHTML;
                 };
             }
         }
         selectedRowToInput();
         
         function editHtmlTbleSelectedRow()
         {
             var  id = document.getElementById("idCliente").value,
                nome = document.getElementById("cNome").value,
                 cpf = document.getElementById("cCpf").value;
                 

            if(!checkEmptyInput()){
            table.rows[rIndex].cells[0].innerHTML = id;
             table.rows[rIndex].cells[1].innerHTML = nome;
             table.rows[rIndex].cells[2].innerHTML = cpf;
           }
         }
         
     </script>
@endsection