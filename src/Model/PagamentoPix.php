<?php

namespace App\Model;

use App\Model\ContaBancariaCliente;

class PagamentoPix extends Pagamento
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
        $saldoCliiente = $this->contaCliente->getSaldo();

        if ($this->contaCliente->debitar($valor)) {
            echo("Pix efetuado com sucesso. Débito de R$ " . $valor . " realizado na conta do cliente.\n");
            $this->contaCliente->exibirDetalhes(); 
            return true;
        }
        else {
            echo("Pagamento REJEITADO (valor inválido)");
            $this->contaCliente->exibirDetalhes();
            return false;
        }
    }
}