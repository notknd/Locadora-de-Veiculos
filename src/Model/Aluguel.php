<?php

namespace App\Model;

class Aluguel
{
    private Cliente $cliente;
    private Veiculo $veiculo;
    private string $dataInicio;
    private bool $paga = false;
    private int $metodoPagamento;

    public function __construct(Cliente $cliente, Veiculo $veiculo, string $dataInicio)
    {
        $this->cliente = $cliente;
        $this->veiculo = $veiculo;
        $this->dataInicio = $dataInicio;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }

    public function getVeiculo(): Veiculo
    {
        return $this->veiculo;
    }

    public function setVeiculo(Veiculo $veiculo): void
    {
        $this->veiculo = $veiculo;
    }

    public function getDataInicio(): string
    {
        return $this->dataInicio;
    }

    public function setDataInicio(string $dataInicio): void
    {
        $this->dataInicio = $dataInicio;
    }
    public function setPagamentoPix(PagamentoPix $pix){ 
        $this->pix = $pix;
    }
    public function setPagamentoCartao(PagamentoCartao $cartao){ 
        $this->cartao = $cartao;
    }
    public function setPagamentoBoleto(PagamentoBoleto $boleto){ 
        $this->boleto = $boleto;
    }
    public function isPaga(): bool {
        return $this->paga;
    }


    public function exibirDetalhes(): void
    {
        echo "___ Aluguel Registrado ___\n";
        $this->cliente->exibirDetalhes();
        $this->veiculo->exibirDetalhes();
        echo "Data de início: {$this->dataInicio}\n";
        echo "___________________________\n";
    }
}