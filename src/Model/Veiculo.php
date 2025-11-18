<<<<<<< HEAD
<?php

namespace App\Model;

// define uma base pra todas as classes que herdarem essa "Veiculo"
abstract class Veiculo
{
    protected string $placa;
    protected string $marca;
    protected string $modelo;
    protected int $ano;

    public function __construct(string $placa, string $marca, string $modelo, int $ano)
    {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    //toda classe herdeira vai ter esse método
    abstract public function exibirDetalhes(): void;
=======
<?php

namespace App\Model;

// define uma base pra todas as classes que herdarem essa "Veiculo"
abstract class Veiculo
{
    protected string $placa;
    protected string $marca;
    protected string $modelo;
    protected int $ano;

    public function __construct(string $placa, string $marca, string $modelo, int $ano)
    {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function getPlaca(): string
    {
        return $this->placa;
    }

    //toda classe herdeira vai ter esse método
    abstract public function exibirDetalhes(): void;
>>>>>>> f9c6238c5a29d3a6f7bbf7b25c935dfee5b408b7
}