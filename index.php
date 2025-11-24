<?php

require_once 'vendor\autoload.php';

use App\Model\Carro;
use App\Model\Moto;
use App\Model\Cliente;
use App\Model\Aluguel;
use App\Model\PagamentoPix;
use App\Model\PreReserva;
use App\Model\PagamentoBoleto;
use App\PagamentoCartao;
use App\Model\ContaBancariaCliente;

$veiculos = [];
$clientes = [];
$alugueis = [];

echo "______________\n";
echo "  Bem-vindo à Locadora de Veículos POO  \n";
echo "______________\n";

while (true) {
    echo "\nEscolha uma opção:\n";
    echo "1. Cadastrar Carro\n";
    echo "2. Cadastrar Moto\n";
    echo "3. Cadastrar Cliente\n";
    echo "4. Listar Veículos\n";
    echo "5. Listar Clientes\n";
    echo "6. Registrar Aluguel\n";
    echo "7. Listar Aluguéis\n";
    echo "8. Pré Registrar\n";
    echo "9. Sair\n";
    echo "Opção: ";

    $opcao = (int) readline();

    switch ($opcao) {
        case 1:
            echo "_ Cadastro de Carro _\n";
            echo "Placa: ";
            $placa = readline();
            echo "Marca: ";
            $marca = readline();
            echo "Modelo: ";
            $modelo = readline();
            echo "Ano: ";
            $ano = (int) readline();
            echo "Número de Portas: ";
            $portas = (int) readline();
            echo "Valor: ";
            $valor = (float) readline();

            $veiculos[] = new Carro($placa, $marca, $modelo, $ano, $portas, $valor);
            echo "Carro cadastrado com sucesso!\n";
            break;

        case 2:
            echo "_ Cadastro de Moto _\n";
            echo "Placa: ";
            $placa = readline();
            echo "Marca: ";
            $marca = readline();
            echo "Modelo: ";
            $modelo = readline();
            echo "Ano: ";
            $ano = (int) readline();
            echo "Cilindradas: ";
            $cilindradas = (int) readline();
            echo "Valor: ";
            $valor = (float) readline();

            $veiculos[] = new Moto($placa, $marca, $modelo, $ano, $cilindradas, $valor);
            echo "Moto cadastrada com sucesso!\n";
            break;

        case 3:
            echo "_ Cadastro de Cliente _\n";
            echo "CPF: ";
            $cpf = readline();
            echo "Nome: ";
            $nome = readline();
            echo "Número da conta: ";
            $numConta = (int) readline();
            echo "Saldo Inicial: ";
            $saldoInicial = (float) readline();

            $novaConta = new ContaBancariaCliente($numConta, $saldoInicial);
            $clientes[] = new Cliente($cpf, $nome, $novaConta);
            echo "Cliente cadastrado com sucesso!\n";
            break;

        case 4:
            if(empty($veiculos)){
                echo "Realiza o cadastro do veiculo!\n";
                break;
            }
            else{
                echo "_ Lista de Veículos _\n";
                foreach ($veiculos as $veiculo) {
                    $veiculo->exibirDetalhes();
                }
                break;
            }

        case 5:
            if(empty($clientes)){
                echo "Realiza o cadastro de cliente!\n";
                break;
            }
            else{
                echo "_ Lista de Clientes _\n";
                foreach ($clientes as $cliente) {
                    $cliente->exibirDetalhes();
                }
                break;
            }

        case 6:
            if(empty($clientes)){
                echo "Realiza o cadastro de cliente!\n";
                break;
            }
            elseif(empty($veiculos)){
                echo "Realiza o cadastro do veiculo!\n";
                break;
            }
            else{
                echo "_ Registro de Novo Aluguel _\n";

                echo "Escolha um veículo da lista abaixo:\n";
                foreach ($veiculos as $indice => $veiculo) {
                    echo ($indice + 1) . ". ";
                    $veiculo->exibirDetalhes();
                }
                echo "Digite o NÚMERO do veículo: ";
                $indiceVeiculo = (int) readline() - 1;
                $veiculoEscolhido = $veiculos[$indiceVeiculo];

                echo "\nEscolha um cliente da lista abaixo:\n";
                foreach ($clientes as $indice => $cliente) {
                    echo ($indice + 1) . ". ";
                    $cliente->exibirDetalhes();
                }
                echo "Digite o NÚMERO do cliente: ";
                $indiceCliente = (int) readline() - 1;
                $clienteEscolhido = $clientes[$indiceCliente];

                echo "Digite a data de início do aluguel: ";
                $dataInicio = readline();

                $novoAluguel = new Aluguel($clienteEscolhido, $veiculoEscolhido, $dataInicio);
                $alugueis[] = $novoAluguel;

                echo "\nAluguel registrado com sucesso!\n";
                $novoAluguel->exibirDetalhes();


                echo "Digite o NÚMERO do método de pagamento: ";
                echo "\n1. Cartão\n2. Boleto\n3.Pix\n";
                $indicePag = (int) readline() - 1;
                $metodoPagamento = $indicePag + 1; // 1: cartão, 2: boleto, 3: pix


                if ($metodoPagamento === 1) {
                    $pagamento = new PagamentoCartao($valorPreReserva, contaCliente: $clienteEscolhido->getConta());
                    $sucessoPagamento = $pagamento->processar_pagamento();

                } elseif ($metodoPagamento === 2) {
                    $pagamento = new PagamentoBoleto($valorPreReserva, $clienteEscolhido->getConta());
                    $sucessoPagamento = $pagamento->processar_pagamento();

                } elseif ($metodoPagamento === 3) {
                    $pagamento = new PagamentoPix($valorPreReserva, $clienteEscolhido->getConta());
                    $sucessoPagamento = $pagamento->processar_pagamento();

                } else {
                    echo "Método de pagamento inválido.\n";
                    break;
                }
            }

        case 7:
            if(empty($alugueis)){
                echo "Ei querido, primeiro realiza o cadastro do aluguél.\n";
                break;
            }
            else{
                echo "_ Lista de Aluguéis _\n";
                foreach ($alugueis as $aluguel) {
                    $aluguel->exibirDetalhes();
                }
                break;
            }

        case 8:
            if(empty($clientes)){
                echo "Realiza o cadastro de cliente!\n";
                break;
            }
            elseif(empty($veiculos)){
                echo "Realiza o cadastro do veiculo!\n";
                break;
            }
            else{
                $sucessoPagamento = false;

                echo "_ Pré Cadastro _\n";
                echo "Escolha um veículo da lista abaixo:\n";
                foreach ($veiculos as $indice => $veiculo) {
                    echo ($indice + 1) . ". ";
                    $veiculo->exibirDetalhes();
                }

                echo "Digite o NÚMERO do veículo: ";
                $indiceVeiculo = (int) readline() - 1;
                $veiculoEscolhido = $veiculos[$indiceVeiculo];
                $valorPreReserva = $veiculoEscolhido->getValor();
                echo "\nEscolha um cliente da lista abaixo:\n";
                foreach ($clientes as $indice => $cliente) {
                    echo ($indice + 1) . ". ";
                    $cliente->exibirDetalhes();
                }
                echo "Digite o NÚMERO do cliente: ";
                $indiceCliente = (int) readline() - 1;
                $clienteEscolhido = $clientes[$indiceCliente];
                
                echo "Digite o NÚMERO do método de pagamento: ";
                echo "\n1. Cartão\n2. Boleto\n3.Pix\n";
                $indicePag = (int) readline() - 1;
                $metodoPagamento = $indicePag + 1; // 1: cartão, 2: boleto, 3: pix


                if ($metodoPagamento === 1) {
                    $pagamento = new PagamentoCartao($valorPreReserva, $clienteEscolhido->getConta());
                    $sucessoPagamento = $pagamento->processar_pagamento();

                } elseif ($metodoPagamento === 2) {
                    $pagamento = new PagamentoBoleto($valorPreReserva, $clienteEscolhido->getConta());
                    $sucessoPagamento = $pagamento->processar_pagamento();

                } elseif ($metodoPagamento === 3) {
                    $pagamento = new PagamentoPix($valorPreReserva, $clienteEscolhido->getConta());
                    $sucessoPagamento = $pagamento->processar_pagamento();

                } else {
                    echo "Método de pagamento inválido.\n";
                break;
                }
                
                echo "Digite a data limite de pagamento (Prazo): ";
                $dataLimite = readline();

                $novaPreReserva = new PreReserva($clienteEscolhido, $veiculoEscolhido, $dataLimite, $metodoPagamento);

                if ($sucessoPagamento) {
                    echo "\n-------------------------------------------------\n";
                    echo "Digite a data SIMULADA em que o pagamento foi efetuado: ";
                    $dataPagamentoSimulada = readline();
                    echo "-------------------------------------------------\n";
                    $novaPreReserva->marcarComoPaga($dataPagamentoSimulada);
                    if ($novaPreReserva->estaDentroDoPrazo()) {

                        echo "\nPagamento efetuado dentro do prazo ({$dataPagamentoSimulada}).\n";

                        echo "Digite o PRAZO de aluguel: ";
                        $prazoAluguel = readline(); 
                        $aluguelFinal = new Aluguel($clienteEscolhido, $veiculoEscolhido, $prazoAluguel);
                        $alugueis[] = $aluguelFinal; 

                        $aluguelFinal->exibirDetalhes();
                    } else {
                        echo "\nPagamento efetuado ({$dataPagamentoSimulada}), mas FORA DO PRAZO. Pré-Reserva CANCELADA.\n";
                        $novaPreReserva->cancelaPreReserva(); 
                    }
                } else {
                    echo "\nFalha no pagamento. Pré-reserva não efetivada.\n";
                }

                $listaPreReserva[] = $novaPreReserva;
                $novaPreReserva->exibirDetalhes();
                
                break;
            }
            

        case 9:
            echo "Saindo do sistema. Até logo!\n";
            exit;

        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }
}