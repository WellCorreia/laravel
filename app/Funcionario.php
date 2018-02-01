<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
    	'fun_nome',
    	'fun_salario',
    	'fun_da_nascimento',
    	'fun_da_contratacao',
    	'cargo_id',
    	'setor_id',
    ];
}
