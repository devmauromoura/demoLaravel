<?php

namespace DemoMauro;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
        protected $fillabe = [
    	'nome',
    	'undMedida',
    	'quantidade',
    	'valor'
    ];
}
