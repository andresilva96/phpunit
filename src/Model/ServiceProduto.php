<?php

namespace App\Model;

use App\Conexao\Conexao;
use App\Model\Produto;

class ServiceProduto
{
    /*
     * Insere e atualiza
     */
    public function save(Produto $produto): bool
    {
        $db = new Conexao();

        if ($produto->getId() == null) {
            echo 'insert';
            $query = "INSERT INTO produtos VALUES (null, :nome, :preco, :quantidade, :total)";
            $stmt = $db->conexao()->prepare($query);
        } else {
            echo 'update';
            $query = "UPDATE produtos SET nome = :nome, preco = :preco, quantidade = :quantidade, total = :total WHERE id = :id";
            $stmt = $db->conexao()->prepare($query);
            $stmt->bindValue(":id", $produto->getId());
        }


        $stmt->bindValue(":nome", $produto->getNome());
        $stmt->bindValue(":preco", $produto->getPreco());
        $stmt->bindValue(":quantidade", $produto->getQuantidade());
        $stmt->bindValue(":total", $produto->getTotal());

        return $stmt->execute();
    }

    /*
     * Lista
     */
    public function list()
    {
        $db = new Conexao();
        $query = "SELECT * FROM produtos";
        $stmt = $db->conexao()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /*
     * Deleta
     */
    public function delete(Produto $produto): bool
    {
        $db = new Conexao();
        $query = "DELETE FROM produtos WHERE id = :id";
        $stmt = $db->conexao()->prepare($query);
        $stmt->bindValue(":id", $produto->getId());

        return $stmt->execute();
    }
}