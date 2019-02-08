@extends('layout.app')
@section('pageTitle', 'Estoque')
@section('content_page')
    <main>
        <div class="container">
            <div class="col s12">
                <h2>Produtos</h2>
            </div>
            <div class="row">
                 <!-- Modal Trigger -->
                 <button data-target="modal1" class="btn modal-trigger">Novo Produto</button>    
                  <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                <form action="estoque/cadastrar/go" method="post">
                                     @csrf
                                    <h4>Cadastrar Novo Produto</h4>
                                    <div class="col s6">
                                        <div class="input-field">
                                            <input placeholder="Ex.: Roteador X" id="nomeProduto" type="text" class="validate" name="nome" required>
                                            <label for="nomeProduto">Nome Produto</label>
                                        </div>
                                    </div> 
                                    <div class="col s2">
                                        <div class="input-field">
                                               <select class="browser-default" name="unidMed">
                                                <option value="">Selecione a UND.MED.</option>
                                                <option value="UND">Unidade</option>
                                                <option value="MT">Metros</option>
                                                <option value="KIT">Kit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s2">
                                        <div class="input-field">
                                            <input type="text" name="quantidade">
                                            <label>Quantidade</label>
                                        </div>
                                    </div>
                                    <div class="col s2">
                                        <div class="input-field">
                                            <input type="text" id="valorProduto" name="valor" class="validate" value="" required>
                                            <label for="valorProduto">Valor R$</label>
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
                                <form action="/estoque/cadastro/atualizar" method="get">
                                     @csrf
                                    <h4>Cadastro Produto</h4>
                                    <div class="col s1">
                                        <div class="input-field">
                                            <label>#</label>
                                            <input placeholder="" type="text" id="cIdProd" name="idProd">
                                        </div>
                                    </div>
                                    <div class="col s5">
                                        <div class="input-field">
                                            <input placeholder="" id="cNomeProd" type="text" class="validate" name="nome" required>
                                            <label for="nomeProduto">Nome Produto</label>
                                        </div>
                                    </div> 
                                    <div class="col s2">
                                        <div class="input-field">
                                               <select class="browser-default" name="unidMed" id="cUnidMedProd">
                                                <option value="">Selecione a UND.MED.</option>
                                                <option value="UND">Unidade</option>
                                                <option value="MT">Metros</option>
                                                <option value="KIT">Kit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s2">
                                        <div class="input-field">
                                            <input placeholder="" type="text" name="quantidade" id="quantidadeProd">
                                            <label>Quantidade</label>
                                        </div>
                                    </div>
                                    <div class="col s2">
                                        <div class="input-field">
                                            <input placeholder="" type="text" id="valorProd" name="valor" class="validate" value="" required>
                                            <label for="valorProd">Valor R$</label>
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
                            <th>Nome</th>
                            <th>Und.Medida</th>
                            <th>Estoque</th>
                            <th>Valor</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                     @foreach($todosProdutos as $prod)
                    <tbody>
                        <tr>
                            <td>{{$prod->id}}</td>
                            <td>{{$prod->nome}}</td>
                            <td>{{$prod->unid_med}}</td>
                            <td>{{$prod->quantidade}}</td>
                            <td>{{$prod->valor}}</td>
                            <td><a href="" data-target="modal2" class=" modal-trigger material-icons">edit</a>
                                <a href="/estoque/cadastro/remover/{{$prod->id}}" class="material-icons">cancel</a></td>
                        </tr>
                    </tbody>
                    @endforeach
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
                   document.getElementById("cIdProd").value = this.cells[0].innerHTML;
                   document.getElementById("cNomeProd").value = this.cells[1].innerHTML;
                   document.getElementById("cUnidMedProd").value = this.cells[2].innerHTML;
                   document.getElementById("quantidadeProd").value = this.cells[3].innerHTML;
                   document.getElementById("valorProd").value = this.cells[4].innerHTML;
                 };
             }
         }
         selectedRowToInput();
     </script>
@endsection            