<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MinhaPrimeiraSeed extends Seeder
{
    public function run()
    {
        $this->db->table('produtos')->insert([
            'nome' => 'Notebook',
            'descricao' => 'Produto Usado',
            'valor_de_compra' => 899.90,
            'valor_de_venda' => 1399.9,
            'quantidade' => 13,
            'validade' => ''
        ]);
    }
}

