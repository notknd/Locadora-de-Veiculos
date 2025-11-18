<<<<<<< HEAD
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
=======
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
>>>>>>> f9c6238c5a29d3a6f7bbf7b25c935dfee5b408b7
