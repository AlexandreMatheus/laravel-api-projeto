<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = [
        'id_comprador',
        'id_vendedor',
        'id_produto',
        'nome_produto',
        'valor_compra'
    ];
}
