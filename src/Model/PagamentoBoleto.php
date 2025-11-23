<?php

namespace App\Model;
use App\Model\ContaBancariaCliente;

class PagamentoBoleto extends Pagamento
{
    private ContaBancariaCliente $contaCliente;
    public function __construct(float $valor, ContaBancariaCliente $contaCliente)
    {
        parent::__construct($valor);
        $this->contaCliente = $contaCliente;
    }

    public function processar_pagamento(): bool
    {
        $valor = $this->getValor();

        if ($valor > 0){
            echo("Boleto registrado com sucesso.");
            $this->contaCliente->exibirDetalhes();
            return true;
        }
        else {
            echo("Pagamento Boleto REJEITADO");
            $this->contaCliente->exibirDetalhes();
            return false;
        }
    }
}