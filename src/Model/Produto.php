<?php

declare(strict_types = 1);

namespace App\Model;

class Produto
{
    private $id;
    private $nome;
    private $preco;
    private $quantidade;
    private $total;

    /**
     * @return mixed
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId(Int $id): Produto
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome(): ?String
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome(String $nome): Produto
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPreco(): ?float
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco(float $preco): Produto
    {
        $this->preco = $preco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantidade(): ?int
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade(int $quantidade): Produto
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotal(): ?float
    {
        return $this->quantidade * $this->preco;
    }

    public function hidratador(array $data)
    {
        isset($data['id']) ? $this->setId($data['id']) : null;
        isset($data['nome']) ? $this->setNome($data['nome']) : null;
        isset($data['preco']) ? $this->setPreco($data['preco']) : null;
        isset($data['quantidade']) ? $this->setQuantidade($data['quantidade']) : null;
    }

}