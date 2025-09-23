<?php

require_once '/vendor/autoload.php';

use App\Model\Carro;
use App\Model\Moto;
use App\Model\Cliente;
use App\Model\Aluguel;

$veiculos = [];
$clientes = [];
$alugueis = [];

echo "________________________________________\n";
echo "  Bem-vindo à Locadora de Veículos POO  \n";
echo "________________________________________\n";

while (true) {
    echo "\nEscolha uma opção:\n";
    echo "1. Cadastrar Carro\n";
    echo "2. Cadastrar Moto\n";
    echo "3. Cadastrar Cliente\n";
    echo "4. Listar Veículos\n";
    echo "5. Listar Clientes\n";
    echo "6. Sair\n";
    echo "Opção: ";

    $opcao = (int) readline();

    switch ($opcao) {
        case 1:
            echo "--- Cadastro de Carro ---\n";
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

            $veiculos[] = new Carro($placa, $marca, $modelo, $ano, $portas);
            echo "Carro cadastrado com sucesso!\n";
            break;

        case 2:
            echo "--- Cadastro de Moto ---\n";
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

            $veiculos[] = new Moto($placa, $marca, $modelo, $ano, $cilindradas);
            echo "Moto cadastrada com sucesso!\n";
            break;

        case 3:
            echo "--- Cadastro de Cliente ---\n";
            echo "CPF: ";
            $cpf = readline();
            echo "Nome: ";
            $nome = readline();

            $clientes[] = new Cliente($cpf, $nome);
            echo "Cliente cadastrado com sucesso!\n";
            break;

        case 4:
            echo "--- Lista de Veículos ---\n";
            if (empty($veiculos)) {
                echo "Nenhum veículo cadastrado.\n";
            } else {
                foreach ($veiculos as $veiculo) {
                    $veiculo->exibirDetalhes();
                }
            }
            break;
            
        case 5:
            echo "--- Lista de Clientes ---\n";
            if (empty($clientes)) {
                echo "Nenhum cliente cadastrado.\n";
            } else {
                foreach ($clientes as $cliente) {
                    $cliente->exibirDetalhes();
                }
            }
            break;

        case 6:
            echo "Saindo do sistema. Até logo!\n";
            exit;

        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }
}