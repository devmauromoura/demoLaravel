<?php

namespace demoMauro\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{


    //web
    public function listarClientes(){
        return $this->Clientes->listarClientes();
    }

}
