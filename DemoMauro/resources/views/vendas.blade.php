@extends('layout.app')
@section('pageTitle', 'Vendas')
@section('content_page')
    <main>
        <div class="container">
            <div class="col s12">
                <h2>Vendas</h2>
            </div>
            <div class="row">
                 <!-- Modal Trigger -->
                 <button data-target="modal1" class="btn modal-trigger">Nova Venda</button>  
                  <!-- Modal Cadastro da Venda -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                <form action="/vendas/cadastrar" method="post">
                                    @csrf
                                    <h4>Cadastrar Venda</h4>
                                    <div class="col s12">
                                        <div class="input-field">
                                            <select class="browser-default" name="clienteVenda">
                                                <option disabled selected>Selecione o Cliente</option>
                                                @foreach($clientesVenda as $cli)
                                                <option value="{{$cli->nome}}">{{$cli->nome}}</option>
                                                 @endforeach    
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn" type="submit">Salvar</button>
                                </form>                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cliente</th>
                            <th>Valor</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($todasVendas as $venda)
                        <tr>
                            <td>{{$venda->id}}</td>
                            <td>{{$venda->nome}}</td>
                            <td>???</td>
                            <td><i class="material-icons">edit</i>
                                <a href="/vendas/movimento/{{$venda->id}}" class="material-icons modal-trigger">list</a>
                                <a href="/vendas/remover/{{$venda->id}}" class="material-icons">cancel</a></td>
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
             
             function checkEmptyInput()
             {
             var isEmpty = false,
                 produto = document.getElementById("produto").value,
                 quantidade = document.getElementById("quantidadeProduto").value;
         
             if(produto === ""){
                 alert("First Name Connot Be Empty");
                 isEmpty = true;
             }
             else if(quantidade === ""){
                 alert("Last Name Connot Be Empty");
                 isEmpty = true;
             }
             return isEmpty;
              }             
         
         // add Row
         function addHtmlTableRow()
         {
             if(!checkEmptyInput()){
             var newRow = table.insertRow(table.length),
                 cell1 = newRow.insertCell(0),
                 cell2 = newRow.insertCell(1),
                 produto = document.getElementById("produto").value,
                 quantidade = document.getElementById("quantidadeProduto").value;
         
             cell1.innerHTML = produto;
             cell2.innerHTML = quantidade;
             // call the function to set the event to the new row
             selectedRowToInput();
         }
         }
         
         // display selected row data into input text
         function selectedRowToInput()
         {
             
             for(var i = 1; i < table.rows.length; i++)
             {
                 table.rows[i].onclick = function()
                 {
                   // get the seected row index
                   rIndex = this.rowIndex;
                   document.getElementById("produto").value = this.cells[0].innerHTML;
                   document.getElementById("quantidadeProduto").value = this.cells[1].innerHTML;
                 };
             }
         }
         selectedRowToInput();
         
         function editHtmlTbleSelectedRow()
         {
             var produto = document.getElementById("produto").value,
                 quantidade = document.getElementById("quantidadeProduto").value;

            if(!checkEmptyInput())
            {
             table.rows[rIndex].cells[0].innerHTML = produto;
             table.rows[rIndex].cells[1].innerHTML = quantidade;
            }
         }
         
         function removeSelectedRow()
         {
             table.deleteRow(rIndex);
             // clear input text
             document.getElementById("produto").value = "";
             document.getElementById("quantidadeProduto").value = "";

         }
     </script>
@endsection            