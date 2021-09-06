<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudante extends Model
{
    protected $table = 'estudante';
    protected $fillable = ['id','nome_aluno','idade_aluno','cpf_aluno', 'serie_aluno'];
}
