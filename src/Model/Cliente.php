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

    public function exibirDetalhes(): void
    {
        echo "Cliente: {$this->nome} | CPF: {$this->cpf}\n";
    }
}
