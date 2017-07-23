<?php

use PHPUnit\Framework\TestCase;
use App\Model\Produto;

class ProdutoEncapsulamentoTest extends TestCase
{

    public function testId()
    {
        $produto = new Produto();
        // Verifica se o valor do total eh null
        $this->assertNull($produto->getId());
    }

    public function testNome()
    {
        $produto = new Produto();

        /*
         * Esse metodo testa a instancia do setter, ou seja,
         * passamos um valor no setter e verificamos se
         * ele realmente eh da classe Produto
         */
        $this->assertNull($produto->getNome());
        $this->assertInstanceOf(Produto::class, $produto->setNome('Produto 1'));
        $this->assertEquals('Produto 1', $produto->getNome());
    }

    public function testePreco()
    {
        $produto = new Produto();
        $this->assertNull($produto->getPreco());
        $this->assertInstanceOf(Produto::class, $produto->setPreco(10.0));
        $this->assertEquals(10.0, $produto->getPreco());
    }

    public function testQuantidade()
    {
        $produto = new Produto();
        $this->assertNull($produto->getQuantidade());
        $this->assertInstanceOf(Produto::class, $produto->setQuantidade(2));
        $this->assertEquals(2, $produto->getQuantidade());
    }

    /*public function testTotal()
    {
        $produto = new Produto();
        $this->assertNull($produto->getTotal());
    }*/
}