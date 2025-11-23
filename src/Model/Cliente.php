<?php

namespace App\Model;
use App\Model\ContaBancariaCliente;

class Cliente
{
    private string $cpf;
    private string $nome;
    private ContaBancariaCliente $numConta;

    public function __construct(string $cpf, string $nome, ContaBancariaCliente $numConta)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->numConta = $numConta;
    }

    public function getConta(): ContaBancariaCliente{
        return $this->numConta;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function exibirDetalhes(): void
    {
        echo "Cliente: {$this->getNome()} | CPF: {$this->getCpf()} | Conta: {$this->getConta()->getNumConta()} \n";
    }
}