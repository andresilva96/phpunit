<?php

use PHPUnit\Framework\TestCase;
use App\Conexao\Conexao;
use App\Model\ServiceProduto;
use App\Model\Produto;

class ProdutoDbTest extends TestCase
{

    public function testInsert()
    {
        $produto = new Produto();
        $crud = new ServiceProduto();
        $produto->hidratador([
            'nome' => 'Produto 1',
            'preco' => 1.0,
            'quantidade' => 1,
            'total' => 1,
        ]);

        $crud->insert();
    }
}