<?php

use PHPUnit\Framework\TestCase;
use App\Model\Produto;

class ProdutoProvedorTest extends TestCase
{
    /**
     * @dataProvider colecaoDados
     */
    public function testEncapsulamento($propriedade, $valor){
        $produto = new Produto();

        // Cria os Getters e Setters passado no array
        $set = $produto->{'set'.$propriedade}($valor);
        $get = $produto->{'get'.$propriedade}();

        // Testa
        $this->assertInstanceOf(Produto::class, $set);
        $this->assertEquals($valor, $get);
    }

    public function colecaoDados()
    {
        // Metodo  - Valor
        return [
            ['Nome', 'Nome 1'],
            ['Preco', 2.0],
            ['Quantidade', 3],
        ];
    }
}