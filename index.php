<?php

require_once 'vendor\autoload.php';

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
    echo "6. Registrar Aluguel\n";
    echo "7. Listar Aluguéis\n";
    echo "8. Sair\n";
    echo "Opção: ";

    $opcao = (int) readline();

    switch ($opcao) {
        case 1:
            echo "___ Cadastro de Carro ___\n";
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
            echo "___ Cadastro de Moto ___\n";
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
            echo "___ Cadastro de Cliente ___\n";
            echo "CPF: ";
            $cpf = readline();
            echo "Nome: ";
            $nome = readline();

            $clientes[] = new Cliente($cpf, $nome);
            echo "Cliente cadastrado com sucesso!\n";
            break;

        case 4:
            echo "___ Lista de Veículos ___\n";
            foreach ($veiculos as $veiculo) {
                $veiculo->exibirDetalhes();
            }
            break;

        case 5:
            echo "___ Lista de Clientes ___\n";
            foreach ($clientes as $cliente) {
                $cliente->exibirDetalhes();
            }
            break;

        case 6:
            echo "___ Registro de Novo Aluguel ___\n";

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
            break;

        case 7:
            echo "___ Lista de Aluguéis ___\n";
            foreach ($alugueis as $aluguel) {
                $aluguel->exibirDetalhes();
            }
            break;

        case 8:
            echo "Saindo do sistema. Até logo!\n";
            exit;

        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }
}
=======
<?php

require_once 'vendor\autoload.php';

use App\Model\Carro;
use App\Model\Moto;
use App\Model\Cliente;
use App\Model\Aluguel;

$veiculos = [];
$clientes = [];
$alugueis = [];
$metodos_pag = ["cartão", "boleto", "pix"];

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
    echo "6. Registrar Aluguel\n";
    echo "7. Listar Aluguéis\n";
    echo "8. Sair\n";
    echo "Opção: ";

    $opcao = (int) readline();

    switch ($opcao) {
        case 1:
            echo "___ Cadastro de Carro ___\n";
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
            echo "___ Cadastro de Moto ___\n";
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
            echo "___ Cadastro de Cliente ___\n";
            echo "CPF: ";
            $cpf = readline();
            echo "Nome: ";
            $nome = readline();

            $clientes[] = new Cliente($cpf, $nome);
            echo "Cliente cadastrado com sucesso!\n";
            break;

        case 4:
            echo "___ Lista de Veículos ___\n";
            foreach ($veiculos as $veiculo) {
                $veiculo->exibirDetalhes();
            }
            break;

        case 5:
            echo "___ Lista de Clientes ___\n";
            foreach ($clientes as $cliente) {
                $cliente->exibirDetalhes();
            }
            break;

        case 6:
            echo "___ Registro de Novo Aluguel ___\n";

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

            echo "Escolha o método de pagamento:\n";
            foreach ($metodos_pag as $indice => $metodo) {
                echo ($indice + 1) . ". ";
            }
            $indicePag = (int) readline() - 1;
            switch($pag){
                case 1:
            }

            echo "Digite a data de início do aluguel: ";
            $dataInicio = readline();

            $novoAluguel = new Aluguel($clienteEscolhido, $veiculoEscolhido, $dataInicio);
            $alugueis[] = $novoAluguel;

            echo "\nAluguel registrado com sucesso!\n";
            $novoAluguel->exibirDetalhes();
            break;



        case 7:
            echo "___ Lista de Aluguéis ___\n";
            foreach ($alugueis as $aluguel) {
                $aluguel->exibirDetalhes();
            }
            break;

        case 8:
            echo "Saindo do sistema. Até logo!\n";
            exit;

        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }
}
>>>>>>> f9c6238c5a29d3a6f7bbf7b25c935dfee5b408b7
