<?php

namespace App\Model;

use App\Model\Cliente;
use App\Model\Veiculo;
use App\Model\PagamentoBoleto;
use App\Model\PagamentoCartao;
use App\Model\PagamentoPix;

class PreReserva{
    private ?PagamentoPix $pix = null;
    private Cliente $cliente;
    private Veiculo $veiculo;
    private string $prazo;
    private ?string $dataPagamento = null;
    private bool $paga = false;
    private int $metodoPagamento;

    public function setPagamentoPix(PagamentoPix $pix){ 
        $this->pix = $pix;
    }
    public function setPagamentoCartao(PagamentoCartao $cartao){ 
        $this->cartao = $cartao;
    }
    public function setPagamentoBoleto(PagamentoBoleto $boleto){ 
        $this->boleto = $boleto;
    }
    public function getVeiculo():Veiculo{ 
        return $this->veiculo;
    }
    protected function setPrazo(string $prazo){ 
        $this->prazo = $prazo;
    }
    protected function getPrazo(){
        return $this->prazo;
    }

    public function marcarComoPaga(string $dataPagamento): void {
        $this->paga = true;
        $this->dataPagamento = $dataPagamento;
    }
    public function estaDentroDoPrazo(): bool{
        if (!$this->isPaga() || $this->dataPagamento === null) {
            return false;
        }
        return $this->dataPagamento <= $this->prazo; 
    }
    public function isPaga(): bool {
        return $this->paga;
    }
    public function processarPagamento(): bool{
        return $this->paga;
    }

    public function cancelaPreReserva(){
        $this->paga = false;
        echo "Pré-reserva cancelada.\n";
    }

    public function __construct(Cliente $cliente, Veiculo $veiculo, string $prazo, int $metodoPagamento){
        $this->cliente = $cliente;
        $this->veiculo = $veiculo;
        $this->setPrazo($prazo);
        $this->metodoPagamento = $metodoPagamento;
    }
    public function exibirDetalhes(): void { 
        echo "Detalhes da Pré-Reserva:\n";
        $this->cliente->exibirDetalhes();
        $this->veiculo->exibirDetalhes();
        echo "Prazo de Pagamento: " . $this->getPrazo() . "\n";
        echo "Método de Pagamento: " . $this->metodoPagamento . "\n";

        if ($this->isPaga()){
            echo "Status: PAGA em " . $this->dataPagamento . "\n";
        } else {
            echo "Status: Aguardando pagamento...\n";
        }
    }
}