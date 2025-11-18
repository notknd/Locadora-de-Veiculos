<<<<<<< HEAD
<?php

namespace App\Model;

class Aluguel
{
    private Cliente $cliente;
    private Veiculo $veiculo;
    private string $dataInicio;

    public function __construct(Cliente $cliente, Veiculo $veiculo, string $dataInicio)
    {
        $this->cliente = $cliente;
        $this->veiculo = $veiculo;
        $this->dataInicio = $dataInicio;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }

    public function getVeiculo(): Veiculo
    {
        return $this->veiculo;
    }

    public function setVeiculo(Veiculo $veiculo): void
    {
        $this->veiculo = $veiculo;
    }

    public function getDataInicio(): string
    {
        return $this->dataInicio;
    }

    public function setDataInicio(string $dataInicio): void
    {
        $this->dataInicio = $dataInicio;
    }

    public function exibirDetalhes(): void
    {
        echo "___ Aluguel Registrado ___\n";
        $this->cliente->exibirDetalhes();
        $this->veiculo->exibirDetalhes();
        echo "Data de início: {$this->dataInicio}\n";
        echo "___________________________\n";
    }
=======
<?php

namespace App\Model;

class Aluguel
{
    private Cliente $cliente;
    private Veiculo $veiculo;
    private string $dataInicio;

    public function __construct(Cliente $cliente, Veiculo $veiculo, string $dataInicio)
    {
        $this->cliente = $cliente;
        $this->veiculo = $veiculo;
        $this->dataInicio = $dataInicio;
    }

    public function exibirDetalhes(): void
    {
        echo "--- Aluguel Registrado ---\n";
        $this->cliente->exibirDetalhes();
        $this->veiculo->exibirDetalhes();
        echo "Data de início: {$this->dataInicio}\n";
        echo "--------------------------\n";
    }
>>>>>>> f9c6238c5a29d3a6f7bbf7b25c935dfee5b408b7
}