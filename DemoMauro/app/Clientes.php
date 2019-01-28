<?php

namespace demoMauro;

use Illuminate\Database\Eloquent\Model;
use lluminate\Support\Facades\DB;

class Clientes extends Model
{
    public function listarClientes(){
        $clientes = DB::table('clientes')->get();
    }
}
