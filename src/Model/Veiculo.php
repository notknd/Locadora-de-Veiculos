<?php

namespace App\Model;

abstract class Veiculo
{
    // Mudamos de protected para private
    private string $placa;
    private string $marca;
    private string $modelo;
    private int $ano;

    public function __construct(string $placa, string $marca, string $modelo, int $ano)
    {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    // --- Getters e Setters (Encapsulamento) ---

    public function getPlaca(): string
    {
        return $this->placa;
    }

    public function setPlaca(string $placa): void
    {
        $this->placa = $placa;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function setAno(int $ano): void
    {
        $this->ano = $ano;
    }

    abstract public function exibirDetalhes(): void;
}