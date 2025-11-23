<?php

namespace App\Model;

abstract class Veiculo
{
    // Mudamos de protected para private
    private string $placa;
    private string $marca;
    private string $modelo;
    private int $ano;

    public function __construct(string $placa, string $marca, string $modelo, int $ano, float $valor)
    {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->valor = $valor;
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

    public function setAno(float $valor): void
    {
        $this->valor = $valor;
    }
    
    public function getValor(): int
    {
        return $this->valor;
    }

    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    abstract public function exibirDetalhes(): void;
}