<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'nome_produto',
        'valor_produto',
        'descricao',
        'vendedor',
        'tipo_produto',
        'peso_produto',
        'imagem_produto'
    ];
}
