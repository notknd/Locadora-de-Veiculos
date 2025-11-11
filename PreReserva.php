<?php

namespace App;

use App\Model\Cliente;
use App\Model\Veiculo;

class PreReserva{
    private Cliente $cliente;
    private Veiculo $veiculo;
    private string $prazo;
    private string $veiculo_pre;

    public function __construct($cliente, string $veiculo_pre, string $prazo){
        $this->cliente = $cliente;
        $this->setPrazo($prazo);
        $this->setVeivuloPre($veiculo_pre);
    }

    public function getPrazo():string{
        return $this->prazo;
    }
    public function getVeiculoPre():string{
        return $this->veiculo_pre;
    }

    protected function setPrazo(string $prazo){
        $this->prazo = $prazo;
    }
    protected function setVeivuloPre(string $veiculo_pre){
        $this->veiculo_pre = $veiculo_pre;
    }
    public function exibir_detalhes(){
        $this->cliente->exibirDetalhes();
        $this->veiculo->exibirDetalhes();
        $this->getPrazo();
        $this->getVeiculoPre();
    }
}