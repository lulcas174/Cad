<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class turma extends Model
{
    protected $table = 'turma';
    protected $fillable = ['id','serie_turma'];
}
