<?php

namespace App\Model;

class Carro extends Veiculo
{
    private int $numeroPortas;

    public function __construct(string $placa, string $marca, string $modelo, int $ano, int $numeroPortas)
    {
        parent::__construct($placa, $marca, $modelo, $ano);
        $this->numeroPortas = $numeroPortas;
    }

    // Getter e Setter específico do Carro
    public function getNumeroPortas(): int
    {
        return $this->numeroPortas;
    }

    public function setNumeroPortas(int $numeroPortas): void
    {
        $this->numeroPortas = $numeroPortas;
    }

    public function exibirDetalhes(): void
    {
        // Note que agora usamos os métodos get...() da classe pai
        echo "Carro: {$this->getMarca()} {$this->getModelo()} | Ano: {$this->getAno()} | Placa: {$this->getPlaca()} | Portas: {$this->numeroPortas}\n";
    }
}