<?php

namespace App;

class PagamentoBoleto extends Pagamento
{
    public function __construct(float $valor)
    {
        parent::__construct($valor);
    }

    public function processar_pagamento(): bool
    {
        if ($this->getValor() > 0){
            echo("Boleto registrado com sucesso.");
            return true;
        }
        else {
            echo(" (valor inválido)");
            return false;
        }
    }
}