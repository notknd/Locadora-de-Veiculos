<?php

namespace App;
use App\Model\ContaBancariaCliente;
use App\Model\Pagamento;
class PagamentoCartao extends Pagamento
{
    private ContaBancariaCliente $contaCliente;
    private float $limiteCartao = 100000;
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
            echo("Pagamento efetuado com sucesso. Débito de R$ " . $valor);
            echo("Novo saldo cliente de R$" . $saldoCliiente);
            $this->contaCliente->exibirDetalhes(); 
            return true;
        }else if ($this->limiteCartao < $valor){
            echo("Pagamento efetuado no crédito, será descontado na fatura do cartão! Valof de R$ " . $valor . " na conta do cliente.\n");   
            return true;
        }
        else {
            echo("Pagamento REJEITADO (valor inválido)");
            $this->contaCliente->exibirDetalhes(); 
            return false;
        }
    }
}