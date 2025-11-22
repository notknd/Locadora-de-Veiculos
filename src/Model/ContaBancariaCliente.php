<?php

namespace App\Model;

class ContaBancariaCliente{
    private float $saldo;
    private int $numConta;

    public function __construct(int $numConta, float $saldoInicial = 0.0){
        $this->numConta = $numConta;
        $this->saldo = $saldoInicial;
    }
    public function setNumConta(int $numConta) {
        $this->numConta = $numConta;
    }

    public function getNumConta(){
        return $this->numConta;
    }
    
    public function getSaldo(): float{
        return $this->saldo;
    }

    public function debitar(float $valor): bool{
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    public function creditar(float $valor): void{
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function exibirDetalhes(): void{
        echo "Conta: {$this->numConta} | Saldo: R$ {$this->saldo}\n";
    }
}
