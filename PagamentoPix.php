<?php

namespace App;

class PagamentoPix extends Pagamento
{
    public function __construct(float $valor)
    {
        parent::__construct($valor);
    }

    public function processar_pagamento(): bool
    {
        if ($this->getValor() > 0){
            echo("Pix realizado com sucesso.");
            return true;
        }
        else {
            echo("Pagamento REJEITADO (valor inválido)");
            return false;
        }
    }
}