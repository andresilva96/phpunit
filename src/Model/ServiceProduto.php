<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 22/07/2017
 * Time: 21:25
 */

namespace App\Model;

use App\Conexao\Conexao;
use App\Model\Produto;

class ServiceProduto
{
    public function insert(): ServiceProduto
    {
        $produto = new Produto();
        $db = new Conexao();

        $query = "INSERT INTO produtos VALUES (null, :nome, :preco, :quantidade, :total)";

        $stmt = $db->conexao()->prepare($query);
        $stmt->bindValue(":nome", $produto->getNome());
        $stmt->bindValue(":preco", $produto->getPreco());
        $stmt->bindValue(":quantidade", $produto->getQuantidade());
        $stmt->bindValue(":total", $produto->getTotal());
        $stmt->execute();

        return $this;
    }
}