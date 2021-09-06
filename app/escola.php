<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class escola extends Model
{
    protected $table = 'escola';
    protected $fillable = ['id','nome_escola','cnpj'];
}
