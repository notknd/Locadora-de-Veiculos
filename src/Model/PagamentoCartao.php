<?php

namespace App;

class PagamentoCartao extends Pagamento
{
    public function __construct(float $valor)
    {
        parent::__construct($valor);
    }

    public function processar_pagamento(): bool
    {
        if ($this->valor > 0){
           echo("Pagamento APROVADO");
            return true;
        }
        echo("Pagamento REJEITADO (valor inválido)");
        return false;
    }
}