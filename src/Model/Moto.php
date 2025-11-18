<?php

namespace App\Model;

class Moto extends Veiculo
{
    private int $cilindradas;

    public function __construct(string $placa, string $marca, string $modelo, int $ano, int $cilindradas)
    {
        parent::__construct($placa, $marca, $modelo, $ano);
        $this->cilindradas = $cilindradas;
    }

    // Getter e Setter específico da Moto
    public function getCilindradas(): int
    {
        return $this->cilindradas;
    }

    public function setCilindradas(int $cilindradas): void
    {
        $this->cilindradas = $cilindradas;
    }

    public function exibirDetalhes(): void
    {
        // Usando getters da classe pai
        echo "Moto: {$this->getMarca()} {$this->getModelo()} | Ano: {$this->getAno()} | Placa: {$this->getPlaca()} | Cilindradas: {$this->cilindradas}cc\n";
    }
}