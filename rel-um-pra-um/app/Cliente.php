<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function endereco()
    {
        //parâmetros
        //1 - Modelo para o relacionamento
        //2 - chave estrangeira
        //3 chave primária da tabela que tem registros
        return $this->hasOne('App\Endereco', 'cliente_id', 'id');
    }
}
