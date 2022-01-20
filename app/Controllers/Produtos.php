<?php

namespace App\Controllers;

use App\Models\ProdutoModel;
use CodeIgniter\Controller;

class Produtos extends Controller 
{
    public function index() 
    {
        $titulo = "Meus Produtos";

        $produtos = [
            [
                'nome'              => 'Notebook',
                'descricao'         => 'Produto usado',
                'valor_de_compra'   => 899.90,
                'valor_de_venda'    => 1399.9,
                'quantidade'        => 11,
                'validade'          => ''
            ],
            [
                'nome'              => 'Computador IS',
                'descricao'         => 'Produto novo',
                'valor_de_compra'   => 1899.90,
                'valor_de_venda'    => 2399.9,
                'quantidade'        => 1,
                'validade'          => ''
            ]
        ];

        $data['titulo'] = $titulo;
        $data['produtos'] = $produtos;

        echo View('produtos/index', $data);
    }

    public function novo() 
    {
        $titulo = "Novo Produto";

        echo View('produtos/novo');
    }

    public function model()
    {
        $produto_model = new ProdutoModel();

        $produto_model->insert([
            'nome'              => "Produto teste",
            'descricao'         => "Produto Novo",
            'valor_de_compra'   => 199.90,
            'valor_de_venda'    => 399.9,
            'quantidade'        => 7,
            'validade'          => ""

        ]);
            
        dd();
    }
}

/*
    Principais métodos: findAll(); first(); insert(); update(); delete();
*/
?>