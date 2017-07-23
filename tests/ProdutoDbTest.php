<?php

use PHPUnit\Framework\TestCase;

use App\Model\ServiceProduto;
use App\Model\Produto;

class ProdutoDbTest extends TestCase
{

    private $crud;

    /*
     * Toda vez que um metodo for executado, sempre vai chamar o SetUp antes...
     */
    public function setUp()
    {
        $this->crud = new ServiceProduto();
    }

    public function testSave()
    {
        $produto = new Produto();

        $produto->hidratador(
            [
                #'id' => 1,
                'nome' => 'Teste',
                'quantidade' => 5,
                'preco' => 5.90
            ]
        );

        $this->assertNotFalse($this->crud->save($produto));

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

        $produto->hidratador(
            [
                'id' => 1
            ]
        );

        $this->assertNotFalse($this->crud->delete($produto));
    }
}