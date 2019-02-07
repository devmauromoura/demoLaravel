@extends('layout.app')
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
                                                <option value="und">Unidade</option>
                                                <option value="mt">Metros</option>
                                                <option value="kit">Kit</option>
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
                <table>
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
                            <td><i class="material-icons">edit</i><i class="material-icons">cancel</i></td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        
    </main>
@endsection            