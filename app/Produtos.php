<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'nome_produto',
         'valor_produto',
          'descricao'
    ];
}
