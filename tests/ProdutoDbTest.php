<?php

use PHPUnit\Framework\TestCase;

use App\Model\ServiceProduto;
use App\Model\Produto;

class ProdutoDbTest extends TestCase
{

    public function testSave()
    {
        $produto = new Produto();
        $crud = new ServiceProduto();

        $produto->hidratador(
            [
                #'id' => 1,
                'nome' => 'Teste',
                'quantidade' => 5,
                'preco' => 5.90
            ]
        );

        $this->assertNotFalse($crud->save($produto));

    }

//     public function testList()
//    {
//        $crud = new ServiceProduto();
//
//        /*
//         * Verifica se retorna os 5 valores inseridos
//         * id - nome - quantidade - preco - total
//         */
//
//        $this->assertCount(1, $crud->list());
//    }

    public function testDelete()
    {
        $produto = new Produto();
        $crud = new ServiceProduto();

        $produto->hidratador(
            [
                'id' => 1
            ]
        );

        $this->assertNotFalse($crud->delete($produto));
    }
}