<?php

namespace App\Model;

class Aluguel
{
    private Cliente $cliente;
    private Veiculo $veiculo;
    private string $dataInicio;

    public function __construct(Cliente $cliente, Veiculo $veiculo, string $dataInicio)
    {
        $this->cliente = $cliente;
        $this->veiculo = $veiculo;
        $this->dataInicio = $dataInicio;
    }

    public function exibirDetalhes(): void
    {
        echo "--- Aluguel Registrado ---\n";
        $this->cliente->exibirDetalhes();
        $this->veiculo->exibirDetalhes();
        echo "Data de início: {$this->dataInicio}\n";
        echo "--------------------------\n";
    }
}