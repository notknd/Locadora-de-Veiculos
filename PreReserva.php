<?php

namespace App;

use App\Model\Cliente;
use App\Model\Veiculo;
use App\Model\PagamentoPix;

class PreReserva{
    private PagamentoPix $pix;
    private Cliente $cliente;
    private Veiculo $veiculo;
    private string $prazo;
    private string $veiculo_pre;
    private int $metodoPagamento;
    

    public function __construct(Cliente $cliente, string $veiculo_pre, string $prazo, int $metodoPagamento){
        $this->cliente = $cliente;
        $this->setPrazo($prazo);
        $this->setVeivuloPre($veiculo_pre);
        $this->metodoPagamento = $metodoPagamento;
    }
    public function getPagamentoPix($pix){
        $this->pix = $pix;
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
        if (processarPagamento() == true){
            echo "Pré reserva efetuado com sucesso!";
        }
    }
}