<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public function cliente()
    {
        //parâmetros
        //1 - Modelo para o relacionamento
        //2 - chave estrangeira na tabela endereço
        //3 chave primária da tabela ao qual cada endereço pertenece
        return $this->belongsTo('App\Cliente','cliente_id', 'id');
    }
}
