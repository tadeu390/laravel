<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desenvolvedor extends Model
{
    protected $table = 'desenvolvedores';

    public function projetos()
    {
        //parametros
        //1 - Modelo que se quer obter os dados relacionados
        //2 - tabela que faz o relacionamento n pra n

        //o método pivot
        //especifica quais campos do relacionamento (tabela alocaccoes) deve ser buscado
        return $this->belongsToMany('App\Projeto', 'alocacoes')->withPivot(['horas_semanais']);
    }
}
