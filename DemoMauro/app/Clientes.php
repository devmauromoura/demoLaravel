<?php

namespace DemoMauro;

use Illuminate\Database\Eloquent\Model;
use lluminate\Support\Facades\DB;

class Clientes extends Model
{
    public function listarClientes(){
        $clientes = self::all();
        return view('/clientes', compact('clientes'));
    }
}
