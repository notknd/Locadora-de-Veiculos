<?php

namespace App\Model;

// herda a base da classe "veiculo"
class Carro extends Veiculo
{
    private int $numeroPortas;

    public function __construct(string $placa, string $marca, string $modelo, int $ano, int $numeroPortas)
    {
        //executa a lógica de construção da classe "Veiculo"
        // $this->placa = $placa;
        // $this->marca = $marca;
        // $this->modelo = $modelo;
        // $this->ano = $ano;
        parent::__construct($placa, $marca, $modelo, $ano);
        $this->numeroPortas = $numeroPortas;
    }

    public function exibirDetalhes(): void
    {
        echo "Carro: {$this->marca} {$this->modelo} | Ano: {$this->ano} | Placa: {$this->placa} | Portas: {$this->numeroPortas}\n";
    }
}