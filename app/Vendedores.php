<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    protected $fillable = [
        'nome_vendedor',
        'imagem_logo',
        'endereco',
    ];
}
