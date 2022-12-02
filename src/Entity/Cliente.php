<?php

namespace Fastview\CrudSimples\Entity;
/**
 * @Entity
 * @Table(name="cliente")
 */
class Cliente
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $nome;
    /**
     * @Column(type="integer")
     */
    private $telefone;
    /**
     * @Column(type="string")
     */
    private $endereco;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getTelefone(): int
    {
        return $this->telefone;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function setTelefone(int $telefone): void
    {
        $this->telefone = $telefone;
    }
    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }
}
