<?php

namespace App\Model;

// herda a base da classe "veiculo"
class Moto extends Veiculo
{
    private int $cilindradas;

    public function __construct(string $placa, string $marca, string $modelo, int $ano, int $cilindradas)
    {
        //executa a lógica de construção da classe "Veiculo"
        parent::__construct($placa, $marca, $modelo, $ano);
        $this->cilindradas = $cilindradas;
    }

    public function exibirDetalhes(): void
    {
        echo "Moto: {$this->marca} {$this->modelo} | Ano: {$this->ano} | Placa: {$this->placa} | Cilindradas: {$this->cilindradas}cc\n";
    }
}