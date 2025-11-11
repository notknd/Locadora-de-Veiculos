<?php

namespace App;

abstract class Pagamento
{
    protected float $valor;

    public function __construct(float $valor){
        $this->valor = $valor;
    }

    public function getValor(): float{
        return $this->valor;
    }

    abstract public function processar_pagamento(): bool;
}