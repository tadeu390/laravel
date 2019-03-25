<?php

use Illuminate\Database\Seeder;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert([
            'nome' => 'Sistema de alocação de recursos',
            'estimativa_hora' => '200'
        ]);

        DB::table('projetos')->insert([
            'nome' => 'Sistema de bibliotecas',
            'estimativa_hora' => '600'
        ]);

        DB::table('projetos')->insert([
            'nome' => 'Sistema de Sistema de vendas',
            'estimativa_hora' => '2000'
        ]);

        DB::table('projetos')->insert([
            'nome' => 'Novo sistema',
            'estimativa_hora' => '5000'
        ]);
    }
}
