<?php

namespace App\Model;

class Cliente
{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    // Talvez você não queira permitir mudar o CPF, então o Setter é opcional, 
    // mas para encapsulamento completo, aqui está:
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
        echo "Cliente: {$this->nome} | CPF: {$this->cpf}\n";
    }
}