<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => 'Camiseta polo',
            'preco' => 100,
            'estoque' => 4,
            'categoria_id' => 1,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Calça Jeans',
            'preco' => 24,
            'estoque' => 3,
            'categoria_id' => 1,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Camiseta manga longa',
            'preco' => 150,
            'estoque' => 3,
            'categoria_id' => 1,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'PC Games',
            'preco' => 500,
            'estoque' => 10,
            'categoria_id' => 2,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Impressora',
            'preco' => 56,
            'estoque' => 6,
            'categoria_id' => 6,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Mouse',
            'preco' => 500,
            'estoque' => 24,
            'categoria_id' => 6,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Perfume',
            'preco' => 500,
            'estoque' => 24,
            'categoria_id' => 3,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Cama de casal',
            'preco' => 500,
            'estoque' => 24,
            'categoria_id' => 4,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Móveis',
            'preco' => 500,
            'estoque' => 24,
            'categoria_id' => 4,
        ]);
    }
}
